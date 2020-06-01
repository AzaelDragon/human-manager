<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationCalcReqsTable extends Migration
{
    public function up() {
        Schema::create('application_calc_reqs', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> bigInteger('application');
            $table -> boolean('is_old_enough');
            $table -> bigInteger('score');
            $table -> boolean('has_enough_score');
            $table -> timestamps();

            $table -> foreign('application') -> references('id') -> on('applications');
        });
    }

    public function down() {
        Schema::dropIfExists('application_calc_reqs');
    }
}
