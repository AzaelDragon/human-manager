<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationBaseReqsTable extends Migration
{
    public function up() {
        Schema::create('application_base_reqs', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> bigInteger('application');
            $table -> boolean('had_benefit_before');
            $table -> boolean('has_interest_letter');
            $table -> boolean('has_education_signup');
            $table -> boolean('has_family_certificate') -> nullable();
            $table -> boolean('has_previous_approbation') -> nullable();
            $table -> boolean('has_declaration_certificate');
            $table -> timestamps();

            $table -> foreign('application') -> references('id') -> on('applications');
        });
    }

    public function down() {
        Schema::dropIfExists('application_base_reqs');
    }
}
