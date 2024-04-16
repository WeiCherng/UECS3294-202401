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
            // $table->unsignedBigInteger('EmpID');
            $table->string('CourseProgram')->nullable();
            $table->string('University')->nullable();
            $table->string('YearGraduate')->nullable();
            $table->string('Cgpa')->nullable();
            $table->string('Achievements')->nullable();
            $table->string('user_id');
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
