<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientExam14Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_exam_14', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            // Mobility fields
            $table->string('mobility')->nullable(); // 'normal' or 'abnormal'
            $table->string('uses_aid')->nullable();

            // Nutrition, Exercise, Sleep, Continence fields (boolean)
            $table->boolean('adequate_nutrition')->nullable();
            $table->boolean('adequate_exercise')->nullable();
            $table->boolean('adequate_sleep')->nullable();
            $table->boolean('continent_of_urine')->nullable();
            $table->boolean('continent_of_faeces')->nullable();

            // Hearing fields
            $table->string('hearing')->nullable(); // 'normal' or 'abnormal'
            $table->string('hearing_aid')->nullable();

            // Vision fields
            $table->string('vision')->nullable(); // 'normal' or 'abnormal'
            $table->string('glasses')->nullable();

            // Teeth fields
            $table->string('teeth')->nullable(); // 'normal' or 'abnormal'
            $table->string('dentures')->nullable();

            // Cognitive and Mental Health fields
            $table->boolean('cognitive_impairment')->nullable();
            $table->string('mental_state_exam')->nullable();
            $table->boolean('depression')->nullable();
            $table->string('depression_score')->nullable();

            // Other history fields
            $table->boolean('has_had_a_fall')->nullable();
            $table->boolean('attended_other_doctor')->nullable();
            $table->boolean('medications_prescribed')->nullable();
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
        Schema::dropIfExists('patient_exam_14');
    }
}
