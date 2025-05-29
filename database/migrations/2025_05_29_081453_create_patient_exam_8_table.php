<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientExam8Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_exam_8', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
             $table->text('lesion_description')->nullable();
            $table->text('skin_issues')->nullable();
            $table->string('rash_description')->nullable();

            // Distribution checkboxes (can be multiple, stored as JSON array)
            $table->json('distribution_areas')->nullable(); // e.g., ['face', 'neck', 'arm']
            $table->string('distribution_other')->nullable(); // For the "Other distribution" text input
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
        Schema::dropIfExists('patient_exam_8');
    }
}
