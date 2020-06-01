<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationCalcReq extends Model {

    public function application() {
        return $this -> belongsTo('App\Models\Application');
    }

}
