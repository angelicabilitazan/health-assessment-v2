<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientExam3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_exam_3', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
             // Checkboxes for general findings
            $table->boolean('no_tenderness')->nullable();
            $table->boolean('no_masses')->nullable();

            // Tenderness regions (can be multiple, stored as JSON array)
            $table->json('tenderness_regions')->nullable(); // e.g., ['RUQ', 'Epigastric']

            // Mass regions (can be multiple, stored as JSON array)
            $table->json('mass_regions')->nullable(); // e.g., ['RUQ', 'Central']

            // Radio button fields for 'yes'/'no' responses
            $table->boolean('guarding')->nullable();
            $table->boolean('rigidity')->nullable();
            $table->boolean('rebound')->nullable();
            $table->boolean('distension')->nullable();
            $table->boolean('hepatomegaly')->nullable();
            $table->boolean('splenomegaly')->nullable();
            $table->boolean('bowel_sounds')->nullable();
            $table->boolean('ascites')->nullable();

            // PR Exam fields (radio buttons)
            $table->boolean('pr_blood')->nullable();
            $table->boolean('pr_mass')->nullable();
            $table->boolean('pr_tenderness')->nullable();

            // Hernias fields (radio buttons)
            $table->boolean('right_inguinal_hernia')->nullable(); // Renamed for clarity
            $table->boolean('left_inguinal_hernia')->nullable();  // Renamed for clarity
            $table->boolean('right_femoral_hernia')->nullable();  // Renamed for clarity
            $table->boolean('left_femoral_hernia')->nullable();   // Renamed for clarity
            $table->boolean('umbilical_hernia')->nullable();      // Renamed for clarity
            $table->boolean('incisional_hernia')->nullable();     // Renamed for clarity

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
        Schema::dropIfExists('patient_exam_3');
    }
}
