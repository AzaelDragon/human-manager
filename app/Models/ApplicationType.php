<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationType extends Model {

    public function applications() {
        return $this -> hasMany('App\Model\Application');
    }

}
