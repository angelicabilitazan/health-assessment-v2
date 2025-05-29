<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientExam12Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_exam_12', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
             // All 'yes'/'no' radio button fields will be boolean
            $table->boolean('poor_sleep')->nullable();
            $table->boolean('early_wakening')->nullable();
            $table->boolean('irritability')->nullable();
            $table->boolean('depressed_mood')->nullable();
            $table->boolean('work_stress')->nullable();
            $table->boolean('financial_stress')->nullable();
            $table->boolean('relationship_problems')->nullable();
            $table->boolean('recent_bereavement')->nullable();
            $table->boolean('irrational_fear')->nullable();
            $table->boolean('panic_attacks')->nullable();
            $table->boolean('compulsive_behaviour')->nullable();
            $table->boolean('delusions')->nullable();
            $table->boolean('auditory_hallucinations')->nullable();
            $table->boolean('visual_hallucinations')->nullable();
            $table->boolean('suicidal_thoughts')->nullable();
            $table->boolean('suicide_attempts')->nullable();
            $table->boolean('low_self_esteem')->nullable();
            $table->boolean('substance_abuse')->nullable();
            $table->boolean('anxious_feelings')->nullable();
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
        Schema::dropIfExists('patient_exam_12');
    }
}
