<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up() {
        Schema::create('employees', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> integer('document');
            $table -> string('name');
            $table -> integer('performance_score');
            $table -> boolean('is_administrative');
            $table -> date('employment_date');
            $table -> decimal('wage');
            $table -> timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('employees');
    }
}
