<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoodsTable extends Migration
{
    public function up()
    {
        Schema::create('moods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // You might want to adjust this based on your user system
            $table->string('mood'); // Assuming mood is a string, you can change the data type as needed
            $table->text('description')->nullable(); // Description is optional
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('moods');
    }
}
