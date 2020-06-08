<?php

namespace App\Http\Controllers;

use App\Http\Auxiliar\ReqReport;
use App\Models\Application;
use Illuminate\Http\Request;

class ReportController extends Controller {

    public function req_report () {

        $data = $this -> construct_req_report_data();
        return view('reports.reqs', ['data' => $data]);

    }

    public function construct_req_report_data() {

        $data = [];
        $app_query = Application::all();

        foreach ($app_query as $app) {

            $tmp_req = new ReqReport($app);
            array_push($data, $tmp_req);

        }

        return $data;

    }

}
