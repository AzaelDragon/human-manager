<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    public function up() {
        Schema::create('applications', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> bigInteger('filling_number');
            $table -> date('filling_date');
            $table -> unsignedBigInteger('application_type');
            $table -> unsignedBigInteger('application_target');
            $table -> unsignedBigInteger('employee');
            $table -> unsignedBigInteger('requested_money');
            $table -> string('comments') -> nullable();
            $table -> timestamps();

            $table -> foreign('application_type') -> references('id') -> on('application_types');
            $table -> foreign('application_target') -> references('id') -> on('application_targets');
            $table -> foreign('employee') -> references('id') -> on('employees');
        });
    }

    public function down() {
        Schema::dropIfExists('application');
    }
}
