<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientExam15Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_exam_15', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
             // Current Alcohol Intake
            $table->boolean('non_drinker')->nullable(); // True if 'nonDrinker' checkbox is checked
            $table->string('current_days_per_week')->nullable();
            $table->string('current_standard_drinks_per_day')->nullable();
            $table->text('current_description')->nullable();

            // Past Alcohol Intake
            $table->string('past_alcohol_intake_level')->nullable(); // 'nil', 'occasional', 'moderate', 'heavy'
            $table->string('past_year_started')->nullable();
            $table->string('past_year_stopped')->nullable();
            $table->text('past_comment')->nullable();

            // CAGE, Standard Drinks, Audit-C
            $table->string('cage_questions_score')->nullable();
            $table->string('standard_drinks_total')->nullable();
            $table->string('audit_c_score')->nullable();

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
        Schema::dropIfExists('patient_exam_15');
    }
}
