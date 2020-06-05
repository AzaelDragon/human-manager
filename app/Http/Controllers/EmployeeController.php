<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $employees = Employee::orderBy('name', 'asc') -> paginate(14);
        return \response(view('employees.index', ['data' => $employees]));

    }

    /**
     * Generate a list of registries matching the specified query.
     *
     * @param Request $request
     * @return \Illuminate\\Http\Response
     */
    public function search(Request $request) {

        $query_text = mb_strtoupper($request -> query_text);

        $dni_query = Employee::where('document', 'LIKE', '%'.$query_text.'%') -> orWhere('name', 'LIKE', '%'.$query_text.'%');
        $final_query = $dni_query -> paginate(14);

        if (!$final_query -> isEmpty()) {

            return \response(view('employees.index', ['data' => $final_query]));

        } else {

            return \response(view('employees.index', ['nores' => true]));

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return \response(view('employees.create'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $rules = array(
            'document' => 'required|numeric|unique:employees',
            'name' => 'required',
            'performance_score' => 'required|numeric',
            'employment_date' => 'required|date',
            'wage' => 'required|numeric'
        );

        $validator = Validator::make($request -> all(), $rules);

        if ($validator -> fails()) {

            echo $validator -> errors();
            echo var_dump($request -> all());
            die();
            return \redirect(route('employees.create') -> withErrors($validator) -> withInput($request -> all()));

        }

        $employee = new Employee();

        $employee -> document = $request -> get('document');
        $employee -> name = str_replace('\'', '', mb_strtoupper($val = iconv('UTF-8','ASCII//TRANSLIT', $request -> get('name'))));
        $employee -> performance_score = $request -> get('performance_score');
        $employee -> is_administrative = ($request -> get('is_administrative') == 'on') ? 1 : 0;
        $employee -> employment_date = $request -> get('employment_date');
        $employee -> wage = $request -> get('wage');
        $employee -> save();

        return \redirect(route('employees.index')) -> with('create-ok', true);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee) {

        return \response(view('employees.edit', ['data' => $employee]));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee) {

        $rules = array(
            'document' => 'required|numeric',
            'name' => 'required',
            'performance_score' => 'required|numeric',
            'employment_date' => 'required|date',
            'wage' => 'required|numeric'
        );

        $validator = Validator::make($request -> all(), $rules);

        if ($validator -> fails()) {

            echo $validator -> errors();
            echo var_dump($request -> all());
            die();
            return \redirect(route('employees.edit', $employee -> id)) -> withErrors($validator) -> withInput($request -> all());

        }

        $employee -> document = $request -> get('document');
        $employee -> name = $request -> get('name');
        $employee -> performance_score = $request -> get('performance_score');
        $employee -> is_administrative = ($request -> get('is_administrative') == 'on') ? 1 : 0;
        $employee -> employment_date = $request -> get('employment_date');
        $employee -> wage = $request -> get('wage');
        $employee -> save();

        return \redirect(route('employees.index')) -> with('edit-ok', true);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */


    public function destroy(Employee $employee) {

        $employee -> delete();
        return \redirect(route('employees.index')) -> with('delete-ok', true);

    }

}
