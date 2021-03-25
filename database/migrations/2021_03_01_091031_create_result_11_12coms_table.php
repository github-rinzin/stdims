<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResult1112comsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_11_12coms', function (Blueprint $table) {
            $table->id();
            $table->integer('english');
            $table->integer('dzongkha');
            $table->integer('bmaths');
            $table->integer('commerce');
            $table->integer('accounts');
            $table->integer('eco_it');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
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
        Schema::dropIfExists('result_11_12coms');
    }
}
