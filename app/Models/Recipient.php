<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Recipient
 *
 * @property int $id
 * @property int $document
 * @property string $name
 * @property int $requested_money
 * @property int $education_level
 * @property int $recipient_type
 * @property int $has_education_signup
 * @property int|null $has_family_certificate
 * @property int|null $has_past_semester_approbation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Recipient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Recipient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Recipient query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Recipient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Recipient whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Recipient whereEducationLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Recipient whereHasEducationSignup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Recipient whereHasFamilyCertificate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Recipient whereHasPastSemesterApprobation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Recipient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Recipient whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Recipient whereRecipientType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Recipient whereRequestedMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Recipient whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Recipient extends Model {

    protected $casts = [
        'was_past_recipient' => 'boolean',
    ];

    protected $appends = ['was_past_recipient'];

    public function getWasPastRecipientAttribute() {
        $past_query = OldRecipient::whereDocument($this -> document) -> get();
        return ($past_query -> isEmpty() || is_null($past_query)) ? false : true;
    }

    public function calculate_requirements() {

        $fulfilled = 0;
        $total = 0;
        $detail = [];

        if ($this -> getWasPastRecipientAttribute()) {
            $total += 1;
            if ($this -> has_past_semester_approbation == 1) {
                $fulfilled += 1;
                $detail['past'] = true;
            } else {
                $detail['past'] = false;
            }
        }

        if ($this -> recipient_type == 2) {
            $total += 1;
            if ($this -> has_family_certificate == 1) {
                $fulfilled += 1;
                $detail['family'] = true;
            } else {
                $detail['family'] = false;
            }
        }

        $ponderate = ($total == 0) ? 0 : $fulfilled/$total * 100;

        return [$fulfilled, $total, $ponderate, $detail];

    }

    public function make_req_summary() {

        $reqs = $this -> calculate_requirements()[3];
        $summary = '';

        $past = (array_key_exists('past', $reqs)) ? $reqs["past"] : null;
        $family = (array_key_exists('family', $reqs)) ? $reqs["family"] : null;

        if (!is_null($past)) {
            $summary .= '• Apr. Anterior: ';
            if ($past) {
                $summary .= '&nbsp;&nbsp;&nbsp;&nbsp;<i class="text-success fas fa-check"></i><br/>';
            } else {
                $summary .= '&nbsp;&nbsp;&nbsp;&nbsp;<i class="text-danger fas fa-times"></i><br/>';
            }
        }

        if (!is_null($family)) {
            $summary .= '• C. Parentesco: ';
            if ($family) {
                $summary .= '&nbsp;&nbsp;&nbsp;<i class="text-success fas fa-check"></i><br/>';
            } else {
                $summary .= '&nbsp;&nbsp;&nbsp;<i class="text-danger fas fa-times"></i><br/>';
            }
        }

        return $summary;

    }

    public function level() {
        return $this -> belongsTo('App\Models\EducationLevel', 'education_level');
    }

    public function type() {
        return $this -> belongsTo('App\Models\RecipientType', 'recipient_type');
    }

}
