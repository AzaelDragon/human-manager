<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationTypesTable extends Migration
{
    public function up()
    {
        Schema::create('application_types', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('name');
            $table -> timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('application_types');
    }
}
