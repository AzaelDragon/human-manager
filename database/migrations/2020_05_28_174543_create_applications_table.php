<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    public function up() {
        Schema::create('applications', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('filling_number');
            $table -> date('filling_date') -> nullable();
            $table -> boolean('last_year_beneficiary');
            $table -> unsignedBigInteger('application_type');
            $table -> unsignedBigInteger('application_target');
            $table -> unsignedBigInteger('beneficiary_document');
            $table -> unsignedBigInteger('beneficiary_name');
            $table -> unsignedBigInteger('employee');
            $table -> unsignedBigInteger('requested_money');
            $table -> string('comments') -> nullable();
            $table -> boolean('has_interest_letter');
            $table -> boolean('has_education_signup');
            $table -> boolean('has_family_certificate') -> nullable();
            $table -> boolean('has_past_semester_approbation') -> nullable();
            $table -> boolean('has_juramented_declaration');
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
