<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeditationJournalsTable extends Migration
{
    public function up()
    {
        Schema::create('meditation_journals', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->text('entry');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('meditation_journals');
    }
}
