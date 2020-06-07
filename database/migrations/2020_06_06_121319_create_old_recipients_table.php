<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOldRecipientsTable extends Migration
{
    public function up() {

        Schema::create('old_recipients', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('document');
            $table -> timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('old_recipients');
    }
}
