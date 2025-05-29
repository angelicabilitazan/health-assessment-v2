<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientExam5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_exam_5', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            // Loin tenderness (checkboxes with 'right', 'left', 'neither' values)
            // Storing this as a string to capture the specific side or 'neither'.
            // If multiple are selected, you might consider a JSON column or separate boolean columns for each side.
            // For now, assuming only one option can be selected per group, or it's a single value.
            $table->string('loin_tenderness_right')->nullable(); // Stores 'right', 'left', or 'neither'
            $table->string('loin_tenderness_left')->nullable();
            $table->string('loin_tenderness_neither')->nullable();
            // Text input fields for urine analysis
            $table->string('blood')->nullable();
            $table->string('protein')->nullable();
            $table->string('glucose')->nullable();
            $table->string('bilirubin')->nullable();
            $table->string('leucocytes')->nullable();
            $table->string('nitrites')->nullable();
            $table->string('ph')->nullable(); // Renamed from 'pH' to 'ph' for database column
            $table->string('ketones')->nullable();
            $table->string('sp_gravity')->nullable(); // Renamed from 'Sp. Gravity' to 'sp_gravity' for database column
            $table->string('urobilinogen')->nullable();
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
        Schema::dropIfExists('patient_exam_5');
    }
}
