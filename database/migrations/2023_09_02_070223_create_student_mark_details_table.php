<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentMarkDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_mark_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id')->comment('Foreign key from student_details id');
            $table->foreign('student_id')->references('id')->on('student_details')->onDelete('cascade');
            $table->integer('tamil_mark')->nullable();
            $table->integer('english_mark')->nullable();
            $table->integer('maths_mark')->nullable();
            $table->integer('science_mark')->nullable();
            $table->integer('history_mark')->nullable();
            $table->integer('geography_mark')->nullable();
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
        Schema::dropIfExists('student_mark_details');
    }
}
