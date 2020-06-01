<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model {

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
