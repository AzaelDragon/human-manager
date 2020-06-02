<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller {

    public static function calculate_score(Employee $employee, Application $application) {

        $level_score = ($application -> application_target <= 4) ? 100 : 80;

        $parsed_date = new \DateTime($employee -> employment_date);
        $years_diff = $parsed_date -> diff(Carbon::now()) -> y;

        if ($years_diff < 2)
            $years_score = 10;
        else if ($years_diff >= 2 && $years_diff <= 4)
            $years_score = 25;
        else if ($years_diff >= 5 && $years_diff <= 7)
            $years_score = 50;
        else if ($years_diff >= 8 && $years_diff <= 10)
            $years_score = 75;
        else
            $years_score = 100;

        $minimum_wage = 980657;
        $adjusted_wage = $employee -> wage/$minimum_wage;

        if ($adjusted_wage < 3.0)
            $wage_score = 100;
        else if ($adjusted_wage >= 3.0 && $adjusted_wage <= 5.0)
            $wage_score = 75;
        else if ($adjusted_wage > 5.0 && $adjusted_wage < 8.0)
            $wage_score = 50;
        else
            $wage_score = 25;

        return ($level_score * 0.3) + ($years_score * 0.35) + ($wage_score * 0.35);

    }

    public static function ponderate_requirements(Application $application) {

        return $application -> has_interest_letter
            + $application -> has_education_signup
            + $application -> has_juramented_declaration;

    }

    public static function ponderate_optionals(Application $application) {

        return $application -> has_family_certificate
            + $application -> has_past_semester_approbation
            + $application -> had_benefit_before;

    }

    /**
     * Generate a list of registries matching the specified query.
     *
     * @param Request $request
     * @return \Illuminate\\Http\Response
     */
    public function search(Request $request) {

        $query_text = strtoupper($request -> query_text);

        $person_query = Employee::firstWhere('name', 'LIKE', '%'.$query_text.'%');
        $potential_person = (is_null($person_query)) ? 0 : $person_query -> id;

        $number_query = Application::where('filling_number', 'LIKE', '%'.$query_text.'%')
            -> orWhere('filling_date', 'LIKE', '%'.$query_text.'%')
            -> orWhere('employee', 'LIKE', $potential_person);

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
            'filling_number' => 'required|numeric',
            'filling_date' => 'required|date',
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
        $application -> had_benefit_before = ($request -> had_benefit_before == 'on') ? 1 : 0;
        $application -> has_interest_letter = ($request -> has_interest_letter == 'on') ? 1 : 0;
        $application -> has_education_signup = ($request -> has_education_signup == 'on') ? 1 : 0;
        $application -> has_family_certificate = ($request -> has_family_certificate == 'on') ? 1 : 0;
        $application -> has_past_semester_approbation = ($request -> has_past_semester_approbation == 'on') ? 1 : 0;
        $application -> has_juramented_declaration = ($request -> has_juramented_declaration == 'on') ? 1 : 0;
        $application -> save();

        return \redirect(route('applications.index')) -> with('create-ok', true);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application) {

        return \response(view('applications.edit', ['data' => $application]));

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
            'filling_number' => 'required|numeric',
            'filling_date' => 'required|date',
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
            return \redirect(route('applications.edit', $application -> id)) -> withErrors($validator) -> withInput($request -> all());

        }

        $employee_lookup = Employee::firstWhere('document', $request -> employee_cc);
        if (is_null($employee_lookup)) {
            return \redirect(route('applications.edit', $application -> id)) -> with('wrong-cc', true);
        }

        $employee = $employee_lookup -> id;

        $application -> filling_number = $request -> filling_number;
        $application -> filling_date = $request -> filling_date;
        $application -> application_type = $request -> application_type;
        $application -> application_target = $request -> application_target;
        $application -> employee = $employee;
        $application -> requested_money = $request -> requested_money;
        $application -> comments = (is_null($request -> comments)) ? '' : $request -> comments;
        $application -> had_benefit_before = ($request -> had_benefit_before == 'on') ? 1 : 0;
        $application -> has_interest_letter = ($request -> has_interest_letter == 'on') ? 1 : 0;
        $application -> has_education_signup = ($request -> has_education_signup == 'on') ? 1 : 0;
        $application -> has_family_certificate = ($request -> has_family_certificate == 'on') ? 1 : 0;
        $application -> has_past_semester_approbation = ($request -> has_past_semester_approbation == 'on') ? 1 : 0;
        $application -> has_juramented_declaration = ($request -> has_juramented_declaration == 'on') ? 1 : 0;
        $application -> save();

        return \redirect(route('applications.index')) -> with('edit-ok', true);

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

}
