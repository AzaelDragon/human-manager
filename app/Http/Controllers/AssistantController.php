<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Employee;

class AssistantController extends Controller {

    public function employee_lookup(Request $request) {

        $query_text = mb_strtoupper($request -> get('query_text'));
        $dni_query = Employee::where('document', 'LIKE', '%'.$query_text.'%') -> orWhere('name', 'LIKE', '%'.$query_text.'%');
        $final_query = $dni_query -> paginate(5);

        if ($final_query -> isEmpty()) {
            return view('assistant.aux.employee-list', ['nores' => true]) -> render();
        }

        return view('assistant.aux.employee-list', ['data' => $final_query]) -> render();

    }

    public function employee_selector() {

        return \response(view('assistant.employee-selector'));

    }

    public function basic_info(Employee $employee) {

        return \response(view('assistant.basic', ['employee' => $employee]));

    }

}
