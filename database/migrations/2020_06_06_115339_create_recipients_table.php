<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipientsTable extends Migration {

    public function up() {

        Schema::create('recipients', function (Blueprint $table) {

            $table -> bigIncrements('id');
            $table -> integer('document');
            $table -> string('name');
            $table -> bigInteger('requested_money');
            $table -> unsignedBigInteger('education_level');
            $table -> unsignedBigInteger('recipient_type');
            $table -> boolean('has_education_signup');
            $table -> boolean('has_family_certificate') -> nullable();
            $table -> boolean('has_past_semester_approbation') -> nullable();
            $table -> timestamps();

            $table -> foreign('education_level') -> references('id') -> on('education_levels');
            $table -> foreign('recipient_type') -> references('id') -> on('recipient_types');

        });

    }

    public function down() {

        Schema::dropIfExists('recipients');

    }

}
