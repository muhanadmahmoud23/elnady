<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_course_id');
            $table->unsignedBigInteger('grade_id');
            $table->decimal('score', '8', '2');
            $table->timestamps();
        });

        Schema::table('scores', function (Blueprint $table) {
            $table->foreign('student_course_id')->references('id')->on('student_courses');
            $table->foreign('grade_id')->references('id')->on('grade_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
};
