<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Application extends Model {

    protected $casts = [
        'raw_score' => 'integer',
    ];

    protected $appends = ['score', 'raw_score', 'mandatory_requirements', 'conditional_requirements', 'rank'];

    public function getValid() {

        return Application::all() -> filter(function($model) { return $model -> raw_score >= 1; }) -> sortByDesc('raw_score');

    }

    public function getRankAttribute() {

        $ranklist = array_flip($this -> getValid() -> pluck('id') -> toArray());
        return [$ranklist[$this -> id], count($ranklist)];

    }

    public function getRawScoreAttribute() {
        return $this -> getScoreAttribute()[0];
    }

    public function getScoreAttribute() {

        $employee = Employee::firstWhere('id', $this -> employee);

        $base_mandatory = $this -> getMandatoryRequirementsAttribute();
        $optional_mandatory = $this -> getConditionalRequirementsAttribute();

        if ($base_mandatory[0] == $base_mandatory[1] && $optional_mandatory[0] == $optional_mandatory[1]) {

            $level_score = ($this -> application_target <= 4) ? 100 : 80;

            $parsed_date = new \DateTime($employee -> employment_date);
            $years_diff = $parsed_date -> diff(Carbon::now())->y;

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
            $adjusted_wage = $employee -> wage / $minimum_wage;

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
            $summary .= '• Nivel: ' . ApplicationTarget::firstWhere('id', $this -> application_target)->name . ' (' . $level_score . ' pts)</br>';
            $summary .= '• Salario: ' . explode('.', $adjusted_wage)[0] . ' SM (' . $wage_score . ' pts)</br>';

            return [$total, $summary, [[$years_diff, $years_score], [$adjusted_wage, $wage_score], [ApplicationTarget::firstWhere('id', $this -> application_target), $level_score]]];

        } else {

            $summary = '• Esta solicitud no cumple con todos los requerimientos solicitados.';
            return [0, $summary, null];

        }

    }

    public function getConditionalRequirementsAttribute () {

        $amount = 0;
        $score = 0;
        $statuses = [];
        $reqs = [];

        $summary = '';

        if ($this -> last_year_beneficiary == 1) {
            $amount += 1;
            if ($this -> has_past_semester_approbation == 1) {
                $statuses['year'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
                $score += 1;
                $reqs['year'] = true;
            } else {
                $statuses['year'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
                $reqs['year'] = false;
            }
            $summary = $summary . '• Aprobación anterior: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$statuses['year'].'<br/>';
        }

        if ($this -> application_type == 2) {
            $amount += 1;
            if ($this -> has_family_certificate == 1) {
                $statuses['family'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
                $score += 1;
                $reqs['family'] = true;
            } else {
                $statuses['family'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';;
                $reqs['family'] = false;
            }
            $summary = $summary . '• Certificado parentesco: &nbsp;'.$statuses['family'].'<br/>';
        }


        if ($amount == 0) {
            return [0, 0, 0, $summary];
        }

        $ponderate = ($score/$amount)*100;

        return [$amount, $score, $ponderate, $summary, $reqs];

    }

    public function getMandatoryRequirementsAttribute () {
        $amount = 5;
        $score = 0;
        $statuses = [];
        $reqs = [];

        $employee = Employee::firstWhere('id', $this -> employee);

        $parsed_date = new \DateTime($employee -> employment_date);
        $years_diff = $parsed_date -> diff(Carbon::now()) -> y;

        if ($years_diff >= 1) {
            $score += 1;
            $statuses['year'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
            $reqs['year'] = true;
        } else {
            $statuses['year'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
            $reqs['year'] = false;
        }

        if ($employee -> performance_score >= 90) {
            $score += 1;
            $statuses['score'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
            $reqs['score'] = true;
        } else {
            $statuses['score'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
            $reqs['score'] = false;
        }

        if ($this -> has_interest_letter == 1) {
            $score += 1;
            $statuses['interest'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
        } else {
            $statuses['interest'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
        }

        if ($this -> has_education_signup == 1) {
            $score += 1;
            $statuses['signup'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
        } else {
            $statuses['signup'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
        }

        if ($this -> has_juramented_declaration == 1) {
            $score += 1;
            $statuses['juramented'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
        } else {
            $statuses['juramented'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
        }

        $summary =
            '• Antigüedad: &nbsp;&nbsp;'.$statuses['year'].'<br/>
        • Puntaje: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$statuses['score'].'<br/>
        • Carta: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$statuses['interest'].'<br/>
        • Certificado: &nbsp;&nbsp;&nbsp;'.$statuses['signup'].'<br/>
        • Declaración: &nbsp;'.$statuses['juramented'].'<br/>';

        $ponderate = ($score/$amount)*100;

        return [$amount, $score, $ponderate, $summary, $reqs];
    }

    public function employee() {
        return $this -> belongsTo('App\Models\Employee');
    }

    public function applicationTarget() {
        return $this -> belongsTo('App\Models\ApplicationTarget');
    }

    public function applicationType() {
        return $this -> belongsTo('App\Models\ApplicationType');
    }

    public function applicationBaseReq() {
        return $this -> hasOne('App\Models\ApplicationBaseReq');
    }

    public function applicationCalcReq() {
        return $this -> hasOne('App\Models\ApplicationCalcReq');
    }

}
