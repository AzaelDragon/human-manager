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
            $table -> unsignedBigInteger('recipient_1');
            $table -> unsignedBigInteger('recipient_2');
            $table -> unsignedBigInteger('employee');
            $table -> string('comments') -> nullable();
            $table -> boolean('has_interest_letter');
            $table -> boolean('has_juramented_declaration');
            $table -> timestamps();

            $table -> foreign('employee') -> references('id') -> on('employees');
            $table -> foreign('recipient_1') -> references('id') -> on('recipients');
            $table -> foreign('recipient_2') -> references('id') -> on('recipients');
        });
    }

    public function down() {
        Schema::dropIfExists('application');
    }
}
