<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientExam13Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_exam_13', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
              // Columns for each activity, storing the impairment level as a string
            $table->string('dressing')->nullable();
            $table->string('personal_hygiene')->nullable();
            $table->string('bathing')->nullable();
            $table->string('eating')->nullable();
            $table->string('toileting')->nullable();
            $table->string('housework')->nullable();
            $table->string('phone_use')->nullable();
            $table->string('managing_finances')->nullable();
            $table->string('shopping')->nullable();
            $table->string('transport')->nullable();
            $table->string('meal_preparation')->nullable();
            $table->string('social_contact')->nullable();
            $table->string('reading')->nullable();
            $table->string('watching_tv')->nullable();
            $table->string('listening_to_radio')->nullable();
            $table->string('home_maintenance')->nullable();
            $table->string('home_safety')->nullable();
            $table->string('driving')->nullable();
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
        Schema::dropIfExists('patient_exam_13');
    }
}
