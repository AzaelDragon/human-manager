<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationBaseReq extends Model {

    public function application() {
        return $this -> belongsTo('App\Models\Application');
    }

}
