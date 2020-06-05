<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\ApplicationTarget;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller {

    /**
     * Generate a list of registries matching the specified query.
     *
     * @param Request $request
     * @return \Illuminate\\Http\Response
     */
    public function search(Request $request) {

        $query_text = mb_strtoupper($request -> query_text);

        $person_query = Employee::selectRaw('employees.id, employees.name, count(*) application_count')
            -> join('applications', 'applications.employee', '=', 'employees.id')
            -> groupBy('employees.name')
            -> orderBy('application_count')
            -> where('name', 'LIKE', '%'.$query_text.'%')
            -> first();

        $potential_person = (is_null($person_query)) ? 0 : $person_query -> id;

        $second_person_query = Employee::firstWhere('document', 'LIKE', '%'.$query_text.'%');
        $second_potential_person = (is_null($second_person_query)) ? 0 : $second_person_query -> id;

        $number_query = Application::where('filling_number', 'LIKE', '%'.$query_text.'%')
            -> orWhere('filling_date', 'LIKE', '%'.$query_text.'%')
            -> orWhere('employee', '=', $potential_person)
            -> orWhere('employee', '=', $second_potential_person);

        $final_query = $number_query -> paginate(14);

        if (!$final_query -> isEmpty()) {

            return \response(view('applications.index', ['data' => $final_query]));

        } else {

            return \response(view('applications.index', ['nores' => true]));

        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $applications = Application::orderBy('filling_number', 'asc') -> paginate(14);
        return \response(view('applications.index', ['data' => $applications]));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return \response(view('applications.create'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $rules = array(
            'filling_number' => 'required',
            'filling_date' => 'date',
            'application_type' => 'required|numeric',
            'application_target' => 'required|numeric',
            'employee_cc' => 'required|numeric',
            'requested_money' => 'required|numeric',
        );

        $validator = Validator::make($request -> all(), $rules);

        if ($validator -> fails()) {

            echo $validator -> errors();
            return \redirect(route('applications.create')) -> withErrors($validator) -> withInput($request -> all());

        }

        $employee_lookup = Employee::firstWhere('document', $request -> employee_cc);
        if (is_null($employee_lookup)) {
            return \redirect(route('applications.create')) -> with('wrong-cc', true);
        }

        $employee = $employee_lookup -> id;

        $application = new Application();
        $application -> filling_number = $request -> filling_number;
        $application -> filling_date = $request -> filling_date;
        $application -> application_type = $request -> application_type;
        $application -> application_target = $request -> application_target;
        $application -> employee = $employee;
        $application -> requested_money = $request -> requested_money;
        $application -> comments = (is_null($request -> comments)) ? '' : $request -> comments;
        $application -> has_interest_letter = ($request -> has_interest_letter == 'on') ? 1 : 0;
        $application -> has_education_signup = ($request -> has_education_signup == 'on') ? 1 : 0;
        $application -> has_family_certificate = ($request -> has_family_certificate == 'on') ? 1 : 0;
        $application -> has_past_semester_approbation = ($request -> has_past_semester_approbation == 'on') ? 1 : 0;
        $application -> has_juramented_declaration = ($request -> has_juramented_declaration == 'on') ? 1 : 0;
        $application -> last_year_beneficiary = ($request -> last_year_beneficiary == 'on') ? 1 : 0;

        if ($request -> application_type == 1) {
            $application -> beneficiary_document = $employee_lookup -> document;
            $application -> beneficiary_name = $employee_lookup -> name;
        } else {
            if (!$request -> beneficiary_document || !$request -> beneficiary_name) {
                return \redirect(route('applications.create')) -> with('no-benefit', true);
            }
            $application -> beneficiary_document = $request -> beneficiary_document;
            $application -> beneficiary_name = $request -> beneficiary_name;
        }

        $application -> save();

        return \redirect(route('applications.index')) -> with('create-ok', true);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function meta_store(Request $request) {

        $rules = array(
            'filling_number' => 'required',
            'filling_date' => 'date|nullable',
            'application_type' => 'required|numeric',
            'application_target' => 'required|numeric',
            'employee' => 'required|numeric',
            'requested_money' => 'required|numeric',
        );

        $validator = Validator::make($request -> all(), $rules);

        if ($validator -> fails()) {

            echo $validator -> errors();
            return \redirect(route('assistant.basic', $request -> employee)) -> withErrors($validator) -> withInput($request -> all());

        }

        $employee_lookup = Employee::firstWhere('id', $request -> employee);
        if (is_null($employee_lookup)) {
            return \redirect(route('assistant.basic')) -> with('wrong-cc', true);
        }

        $employee = $employee_lookup -> id;

        $application = new Application();
        $application -> filling_number = $request -> filling_number;
        $application -> filling_date = $request -> filling_date;
        $application -> application_type = $request -> application_type;
        $application -> application_target = $request -> application_target;
        $application -> employee = $employee;
        $application -> requested_money = $request -> requested_money;
        $application -> comments = (is_null($request -> comments)) ? '' : $request -> comments;
        $application -> has_interest_letter = ($request -> has_interest_letter == 'on') ? 1 : 0;
        $application -> has_education_signup = ($request -> has_education_signup == 'on') ? 1 : 0;
        $application -> has_family_certificate = ($request -> has_family_certificate == 'on') ? 1 : 0;
        $application -> has_past_semester_approbation = ($request -> has_past_semester_approbation == 'on') ? 1 : 0;
        $application -> has_juramented_declaration = ($request -> has_juramented_declaration == 'on') ? 1 : 0;
        $application -> last_year_beneficiary = ($request -> last_year_beneficiary == 'on') ? 1 : 0;

        if ($request -> application_type == 1) {
            $application -> beneficiary_document = $employee_lookup -> document;
            $application -> beneficiary_name = $employee_lookup -> name;
        } else {
            if (!$request -> beneficiary_document || !$request -> beneficiary_name) {
                return \redirect(route('assistant.basic')) -> with('no-benefit', true);
            }
            $application -> beneficiary_document = $request -> beneficiary_document;
            $application -> beneficiary_name = $request -> beneficiary_name;
        }

        $application -> save();

        return \redirect(route('applications.show', $application -> id));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application) {

        return \response(view('applications.show', ['data' => $application]));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application) {

        $rules = array(
            'filling_number' => 'required',
            'filling_date' => 'date|nullable',
            'application_type' => 'required|numeric',
            'application_target' => 'required|numeric',
            'employee_cc' => 'required|numeric',
            'requested_money' => 'required|numeric',
        );

        $validator = Validator::make($request -> all(), $rules);

        if ($validator -> fails()) {

            echo $validator -> errors();
            echo var_dump($request -> all());
            die();
            return \redirect(route('applications.show', $application -> id)) -> withErrors($validator) -> withInput($request -> all());

        }

        $employee_lookup = Employee::firstWhere('document', $request -> employee_cc);
        if (is_null($employee_lookup)) {
            return \redirect(route('applications.show', $application -> id)) -> with('wrong-cc', true);
        }

        $employee = $employee_lookup -> id;

        $application -> filling_number = $request -> filling_number;
        $application -> filling_date = $request -> filling_date;
        $application -> application_type = $request -> application_type;
        $application -> application_target = $request -> application_target;
        $application -> employee = $employee;
        $application -> requested_money = $request -> requested_money;
        $application -> comments = (is_null($request -> comments)) ? '' : $request -> comments;
        $application -> has_interest_letter = ($request -> has_interest_letter == 'on') ? 1 : 0;
        $application -> has_education_signup = ($request -> has_education_signup == 'on') ? 1 : 0;
        $application -> has_family_certificate = ($request -> has_family_certificate == 'on') ? 1 : 0;
        $application -> has_past_semester_approbation = ($request -> has_past_semester_approbation == 'on') ? 1 : 0;
        $application -> has_juramented_declaration = ($request -> has_juramented_declaration == 'on') ? 1 : 0;
        $application -> last_year_beneficiary = ($request -> last_year_beneficiary == 'on') ? 1 : 0;

        if ($request -> application_type == 1) {
            $application -> beneficiary_document = $employee_lookup -> document;
            $application -> beneficiary_name = $employee_lookup -> name;
        } else {
            if (!$request -> beneficiary_document || !$request -> beneficiary_name) {
                return \redirect(route('applications.show')) -> with('no-benefit', true);
            }
            $application -> beneficiary_document = $request -> beneficiary_document;
            $application -> beneficiary_name = $request -> beneficiary_name;
        }

        $application -> save();

        return \redirect(route('applications.show', $application -> id)) -> with('edit-ok', true);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application) {

        $application -> delete();
        return \redirect(route('applications.index')) -> with('delete-ok', true);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application) {

        return \response(view('applications.show', ['data' => $application]));

    }

}
