<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

    public function applications() {
        return $this -> hasMany("App\Models\Application");
    }

}
