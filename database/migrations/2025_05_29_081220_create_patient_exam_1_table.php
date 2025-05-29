<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientExam1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_exam_1', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('patient_id');
            // Radio button fields
            // Using boolean for 'yes'/'no' responses, nullable if not always required
            $table->boolean('clinically_anemic')->nullable();
            $table->boolean('jaundiced')->nullable();

            // Text input fields
            // Using string for fields that might contain mixed characters or units,
            // or where exact numerical precision isn't critical for database storage.
            $table->string('pulse')->nullable();

            // Blood Pressure fields
            $table->string('sitting_bp_top')->nullable();
            $table->string('sitting_bp_low')->nullable();
            $table->string('standing_bp_top')->nullable();
            $table->string('standing_bp_low')->nullable();
            $table->string('lying_bp_top')->nullable();
            $table->string('lying_bp_low')->nullable();

            $table->string('temp')->nullable();
            $table->string('temp_desc')->nullable(); // e.g., "Tympanic"
            $table->string('resp_rate')->nullable();

            // Numerical fields where decimal precision might be needed
            $table->decimal('weight_kg', 8, 2)->nullable(); // 8 digits total, 2 after decimal
            $table->decimal('height_cm', 8, 2)->nullable(); // 8 digits total, 2 after decimal

            $table->string('bsl')->nullable();
            $table->string('bsl_desc')->nullable();

            $table->decimal('waist_measurement_cm', 8, 2)->nullable();
            $table->decimal('hip_measurement_cm', 8, 2)->nullable();

            $table->decimal('bmi', 8, 2)->nullable();

            $table->decimal('o2_saturation_percent', 5, 2)->nullable(); // e.g., 98.50%

            $table->timestamps(); // Adds `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_exam_1');
    }
}
