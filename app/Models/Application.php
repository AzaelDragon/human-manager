<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * App\Models\Application
 *
 * @property int $id
 * @property string $filling_number
 * @property string|null $filling_date
 * @property int $recipient_1
 * @property int $recipient_2
 * @property int $employee
 * @property string|null $comments
 * @property int $has_interest_letter
 * @property int $has_juramented_declaration
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property Employee $r_employee
 * @property Recipient $recipient1
 * @property Recipient $recipient2
 * @property-read mixed $conditional_requirements
 * @property-read mixed $mandatory_requirements
 * @property-read mixed $rank
 * @property-read mixed $raw_score
 * @property-read mixed $score
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereEmployee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereFillingDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereFillingNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereHasInterestLetter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereHasJuramentedDeclaration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereRecipient1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereRecipient2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Application whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Application extends Model {

    protected $with = ['recipient1', 'recipient2', 'r_employee'];

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

        $this -> load('recipient1', 'recipient2', 'r_employee');

        $base_mandatory = $this -> getMandatoryRequirementsAttribute();
        $optional_mandatory = $this -> getConditionalRequirementsAttribute();

        if ($base_mandatory[0] == $base_mandatory[1] && $optional_mandatory[0] == $optional_mandatory[1]) {

            $level1 = $this -> recipient1 -> education_level;
            $level2 = (is_null($this->recipient_2)) ? 0 : $this -> recipient2 -> education_level;

            $max_level = max($level1, $level2);
            $level_score = ($max_level <= 4) ? 100 : 80;

            $parsed_date = new \DateTime($this -> r_employee -> employment_date);
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
            $adjusted_wage = round($this -> r_employee -> wage / $minimum_wage);

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
            $summary .= '• Nivel: ' . EducationLevel::firstWhere('id', $max_level) -> name . ' (' . $level_score . ' pts)</br>';
            $summary .= '• Salario: ' . $adjusted_wage . ' SMMLV (' . $wage_score . ' pts)</br>';

            return [$total, $summary, [[$years_diff, $years_score], [$adjusted_wage, $wage_score], [EducationLevel::firstWhere('id', $max_level), $level_score]]];

        } else {

            $summary = '• Esta solicitud no cumple con todos los requerimientos solicitados.';
            return [0, $summary, null];

        }

    }

    public function getConditionalRequirementsAttribute () {

        $this -> load('recipient1', 'recipient2', 'r_employee');

        $amount = 0;
        $score = 0;
        $statuses = [];
        $reqs = [];

        $summary = '';

        $past_benef1_query = !OldRecipient::where('id', $this -> recipient_1) -> get() -> isEmpty();
        $past_benef2_query = !OldRecipient::where('id', $this -> recipient_2) -> get() -> isEmpty();

        if (!is_null($this -> getRelation('recipient1'))) {

            if ($past_benef1_query) {
                $amount += 1;
                if ($this -> recipient1 -> has_past_semester_approbation == 1) {
                    $statuses['year1'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
                    $score += 1;
                    $reqs['year1'] = true;
                } else {
                    $statuses['year1'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
                    $reqs['year1'] = false;
                }
                $summary = $summary . '• Ap. anterior (B1): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$statuses['year1'].'<br/>';
            }

            if ($this -> recipient1 -> recipient_type == 2) {
                $amount += 1;
                if ($this -> recipient1 -> has_family_certificate == 1) {
                    $statuses['family1'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
                    $score += 1;
                    $reqs['family1'] = true;
                } else {
                    $statuses['family1'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';;
                    $reqs['family1'] = false;
                }
                $summary = $summary . '• C. parentesco (B1): &nbsp;'.$statuses['family1'].'<br/>';
            }

        }

        if (!is_null($this -> getRelation('recipient2'))) {

            if ($past_benef2_query) {
                $amount += 1;
                if ($this->recipient2->has_past_semester_approbation == 1) {
                    $statuses['year2'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
                    $score += 1;
                    $reqs['year2'] = true;
                } else {
                    $statuses['year2'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
                    $reqs['year2'] = false;
                }
                $summary = $summary . '• Ap. anterior (B2): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $statuses['year2'] . '<br/>';
            }

            if ($this->recipient2->recipient_type == 2) {
                $amount += 1;
                if ($this->recipient2->has_family_certificate == 1) {
                    $statuses['family2'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
                    $score += 1;
                    $reqs['family2'] = true;
                } else {
                    $statuses['family2'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';;
                    $reqs['family2'] = false;
                }
                $summary = $summary . '• C. parentesco (B2): &nbsp;' . $statuses['family2'] . '<br/>';
            }

        }

        if ($amount == 0) {
            return [0, 0, 0, $summary];
        }

        $ponderate = ($score/$amount)*100;

        return [$amount, $score, $ponderate, $summary, $reqs];

    }

    public function getMandatoryRequirementsAttribute () {

        $this -> load('recipient1', 'recipient2', 'r_employee');

        $amount = 0;
        $score = 0;
        $statuses = [];
        $reqs = [];

        $parsed_date = new \DateTime($this -> r_employee -> employment_date);
        $years_diff = $parsed_date -> diff(Carbon::now()) -> y;

        if ($this->r_employee->is_administrative == 1) {
            $score += 1;
            $statuses['admon'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
            $reqs['admon'] = true;
            $amount += 1;
        } else {
            $statuses['admon'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
            $reqs['admon'] = false;
            $amount += 1;
        }

        if ($years_diff >= 1) {
            $score += 1;
            $statuses['year'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
            $reqs['year'] = true;
            $amount += 1;
        } else {
            $statuses['year'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
            $reqs['year'] = false;
            $amount += 1;
        }

        if ($this->r_employee->performance_score >= 90) {
            $score += 1;
            $statuses['score'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
            $reqs['score'] = true;
            $amount += 1;
        } else {
            $statuses['score'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
            $reqs['score'] = false;
            $amount += 1;
        }

        if ($this->has_interest_letter == 1) {
            $score += 1;
            $statuses['interest'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
            $reqs['interest'] = true;
            $amount += 1;
        } else {
            $statuses['interest'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
            $reqs['interest'] = false;
            $amount += 1;
        }


        if (!is_null($this -> getRelation('recipient1'))) {

            if ($this->recipient1->requested_money >= 1) {
                $score += 1;
                $statuses['money1'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
                $reqs['money1'] = true;
                $amount += 1;
            } else {
                $statuses['money1'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
                $reqs['money1'] = false;
                $amount += 1;
            }

            if ($this->recipient1->has_education_signup == 1) {
                $score += 1;
                $statuses['signup1'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
                $reqs['signup1'] = true;
                $amount += 1;
            } else {
                $statuses['signup1'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
                $reqs['signup1'] = false;
                $amount += 1;
            }

        }

        if (!is_null($this -> getRelation('recipient2'))) {
            if ($this -> recipient2 -> has_education_signup == 1) {
                $score += 1;
                $amount += 1;
                $statuses['signup2'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
                $reqs['signup2'] = true;
            } else {
                $amount += 1;
                $statuses['signup2'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
                $reqs['signup2'] = false;
            }
            if ($this -> recipient2 -> requested_money >= 1) {
                $score += 1;
                $amount += 1;
                $statuses['money2'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
                $reqs['money2'] = true;
            } else {
                $amount += 1;
                $statuses['money2'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
                $reqs['money2'] = false;
            }
        }

        if ($this -> has_juramented_declaration == 1) {
            $score += 1;
            $statuses['juramented'] = '<span class="text-success"><i class="fas fa-check"></i></span>';
            $reqs['juramented'] = true;
            $amount += 1;
        } else {
            $statuses['juramented'] = '<span class="text-danger"><i class="fas fa-times"></i></span>';
            $reqs['juramented'] = false;
            $amount += 1;
        }

        $summary = '
        • C. Administ.: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$statuses['admon'].'<br/>
        • Antigüedad: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$statuses['year'].'<br/>
        • Desempeño: &nbsp;&nbsp;&nbsp;&nbsp;'.$statuses['score'].'<br/>
        • Carta: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$statuses['interest'].'<br/>
        • Declaración: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$statuses['juramented'].'<br/>';

        if (!is_null($this -> getRelation('recipient1'))) {
            $summary .= '• Matrícula (B1): &nbsp;'.$statuses['signup1'].'<br/>';
            $summary .= '• $ Sol. ≠ 0 (B1): &nbsp;&nbsp;'.$statuses['money1'].'<br/>';
        }

        if (!is_null($this -> getRelation('recipient2'))) {
            $summary .= '• Matrícula (B2): &nbsp;'.$statuses['signup2'].'<br/>';
            $summary .= '• $ Sol. ≠ 0 (B2): &nbsp;&nbsp;'.$statuses['money2'].'<br/>';
        }

        $ponderate = ($score/$amount)*100;

        return [$amount, $score, $ponderate, $summary, $reqs];
    }

    public function r_employee() {
        return $this -> belongsTo('App\Models\Employee', 'employee');
    }

    public function recipient1() {
        return $this -> belongsTo('App\Models\Recipient', 'recipient_1');
    }

    public function recipient2() {
        return $this -> belongsTo('App\Models\Recipient', 'recipient_2');
    }

}
