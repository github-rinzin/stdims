<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResult1112artsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_11_12arts', function (Blueprint $table) {
            $table->id();
            $table->integer('english');
            $table->integer('dzongkha');
            $table->integer('bmaths');
            $table->integer('history');
            $table->integer('geography');
            $table->integer('eco_it');
            $table->integer('media');
            $table->integer('rigzhung');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
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
        Schema::dropIfExists('result_11_12arts');
    }
}
