<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\ApplicationTarget;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller {

    public static function calculate_score(Application $application, Employee $employee) {

        $base_mandatory = self::ponderate_requirements($application, $employee);
        $optional_mandatory = self::ponderate_conditionals($application, $employee);

        if ($base_mandatory[0] == $base_mandatory[1] && $optional_mandatory[0] == $optional_mandatory[1]) {

            $level_score = ($application->application_target <= 4) ? 100 : 80;

            $parsed_date = new \DateTime($employee->employment_date);
            $years_diff = $parsed_date->diff(Carbon::now())->y;

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
            $adjusted_wage = $employee->wage / $minimum_wage;

            if ($adjusted_wage < 3.0)
                $wage_score = 100;
            else if ($adjusted_wage >= 3.0 && $adjusted_wage <= 5.0)
                $wage_score = 75;
            else if ($adjusted_wage > 5.0 && $adjusted_wage < 8.0)
                $wage_score = 50;
            else
                $wage_score = 25;

            $total = ($level_score * 0.3) + ($years_score * 0.35) + ($wage_score * 0.35);
            $summary = '• Antigüedad: ' . $years_diff . ' (' . $years_score . ' pts)</br>';
            $summary .= '• Nivel: ' . ApplicationTarget::firstWhere('id', $application->application_target)->name . ' (' . $level_score . ' pts)</br>';
            $summary .= '• Salario: ' . explode('.', $adjusted_wage)[0] . ' SM (' . $wage_score . ' pts)</br>';

            return [$total, $summary];

        } else {

            $summary = '• Esta solicitud no cumple con todos los requerimientos solicitados.';
            return [0, $summary];

        }

    }

    public static function ponderate_requirements(Application $application, Employee $employee) {

        $amount = 5;
        $score = 0;
        $reqs = [];

        $parsed_date = new \DateTime($employee -> employment_date);
        $years_diff = $parsed_date -> diff(Carbon::now()) -> y;

        if ($years_diff >= 1) {
            $score += 1;
            $reqs['year'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
        } else {
            $reqs['year'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
        }

        if ($employee -> performance_score >= 90) {
            $score += 1;
            $reqs['score'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
        } else {
            $reqs['score'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
        }

        if ($application -> has_interest_letter == 1) {
            $score += 1;
            $reqs['interest'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
        } else {
            $reqs['interest'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
        }

        if ($application -> has_education_signup == 1) {
            $score += 1;
            $reqs['signup'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
        } else {
            $reqs['signup'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
        }

        if ($application -> has_juramented_declaration == 1) {
            $score += 1;
            $reqs['juramented'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
        } else {
            $reqs['juramented'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
        }

        $summary =
        '• Antigüedad: &nbsp;&nbsp;'.$reqs['year'].'<br/>
        • Puntaje: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$reqs['score'].'<br/>
        • Carta: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$reqs['interest'].'<br/>
        • Certificado: &nbsp;&nbsp;&nbsp;'.$reqs['signup'].'<br/>
        • Declaración: &nbsp;'.$reqs['juramented'].'<br/>';

        $ponderate = ($score/$amount)*100;

        return [$amount, $score, $ponderate, $summary];

    }

    public static function ponderate_conditionals(Application $application, Employee $employee) {

        $amount = 0;
        $score = 0;
        $reqs = [];

        $summary = '';

        if ($application -> last_year_beneficiary == 1) {
            $amount += 1;
            if ($application -> has_past_semester_approbation == 1) {
                $reqs['year'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
                $score += 1;
            } else {
                $reqs['year'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';;
            }
            $summary = $summary . '• Aprobación anterior: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$reqs['year'].'<br/>';
        }

        if ($application -> application_type == 2) {
            $amount += 1;
            if ($application -> has_family_certificate == 1) {
                $reqs['family'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
                $score += 1;
            } else {
                $reqs['family'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';;
            }
            $summary = $summary . '• Certificado parentesco: &nbsp;'.$reqs['family'].'<br/>';
        }


        if ($amount == 0) {
            return [0, 0, 0, $summary];
        }

        $ponderate = ($score/$amount)*100;

        return [$amount, $score, $ponderate, $summary];

    }

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
            'filling_number' => 'required|numeric',
            'filling_date' => 'required|date',
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
                return \redirect(route('applications.edit')) -> with('no-benefit', true);
            }
            $application -> beneficiary_document = $request -> beneficiary_document;
            $application -> beneficiary_name = $request -> beneficiary_name;
        }

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
