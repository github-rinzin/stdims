<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResult910sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_9_10s', function (Blueprint $table) {
            $table->id();
            $table->integer('english');
            $table->integer('dzongkha');
            $table->integer('maths');
            $table->integer('history');
            $table->integer('geography');
            $table->integer('biology');
            $table->integer('physics');
            $table->integer('chemistry');
            $table->integer('ict');
            $table->integer('eco_it');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');;
            $table->unsignedBigInteger('class_division_id');
            $table->foreign('class_division_id')->references('id')->on('class_divisions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('result_9_10s');
    }
}
