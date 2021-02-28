<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('code');
            $table->string('name');
            $table->date('dob');
            $table->integer('age');
            $table->unsignedBigInteger('cid');
            $table->string('name_of_previous_school');
            $table->string('fathers_name');
            $table->integer('fathers_contact');
            $table->string('fathers_address');
            $table->string('mothers_name');
            $table->integer('mothers_contact');
            $table->string('mothers_address');
            $table->string('gurdian_name');
            $table->integer('gurdian_contact');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('students');
    }
}
