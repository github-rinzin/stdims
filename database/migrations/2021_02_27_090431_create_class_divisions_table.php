<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_divisions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('division_id');
            $table->foreign('grade_id')->references('id')->on('grades');
            $table->foreign('division_id')->references('id')->on('divisions');
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
        Schema::dropIfExists('class_divisions');
    }
}
