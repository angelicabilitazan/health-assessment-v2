<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientExam10Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_exam_10', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
             // All 'yes'/'no' radio button fields will be boolean
            $table->boolean('vaginal_discharge')->nullable();
            $table->boolean('cst_performed')->nullable();
            $table->boolean('cervix_suspicious')->nullable();
            $table->boolean('cervical_ectopy')->nullable();
            $table->boolean('cervical_polyp')->nullable();
            $table->boolean('cystocele')->nullable();
            $table->boolean('rectocele')->nullable();
            $table->boolean('bulky_uterus')->nullable();
            $table->boolean('retroverted_uterus')->nullable();

            // Checkboxes for side-specific findings (can be multiple, stored as JSON array)
            $table->json('forniceal_tenderness_sides')->nullable(); // e.g., ['right', 'left']
            $table->json('forniceal_mass_sides')->nullable();      // e.g., ['right', 'neither']
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
        Schema::dropIfExists('patient_exam_10');
    }
}
