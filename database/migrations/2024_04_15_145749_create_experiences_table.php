<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('user_id');
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('EmpID');
            $table->string('Employer1Name')->nullable();
            $table->string('Employer1Designation')->nullable();
            $table->decimal('Employer1CTC', 10, 2)->nullable();
            $table->string('Employer1WorkDuration')->nullable();
            $table->string('Employer2Name')->nullable();
            $table->string('Employer2Designation')->nullable();
            $table->decimal('Employer2CTC', 10, 2)->nullable();
            $table->string('Employer2WorkDuration')->nullable();
            $table->string('Employer3Name')->nullable();
            $table->string('Employer3Designation')->nullable();
            $table->decimal('Employer3CTC', 10, 2)->nullable();
            $table->string('Employer3WorkDuration')->nullable();
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
        Schema::dropIfExists('experiences');
    }
}
