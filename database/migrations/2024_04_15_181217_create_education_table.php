<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('EmpID');
            $table->string('CoursePG')->nullable();
            $table->string('SchoolCollegePG')->nullable();
            $table->string('YearPassingPG')->nullable();
            $table->string('PercentagePG')->nullable();
            $table->string('CourseGra')->nullable();
            $table->string('SchoolCollegeGra')->nullable();
            $table->string('YearPassingGra')->nullable();
            $table->string('PercentageGra')->nullable();
            $table->string('CourseSSC')->nullable();
            $table->string('SchoolCollegeSSC')->nullable();
            $table->string('YearPassingSSC')->nullable();
            $table->string('PercentageSCC')->nullable();
            $table->string('CourseHSC')->nullable();
            $table->string('SchoolCollegeHSC')->nullable();
            $table->string('YearPassingHSC')->nullable();
            $table->string('PercentageHSC')->nullable();
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
        Schema::dropIfExists('education');
    }
}
