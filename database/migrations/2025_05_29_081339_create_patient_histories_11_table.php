<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientHistories11Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_histories_11', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
             // Checkboxes for side-specific findings (can be multiple, stored as JSON array)
            $table->json('breast_lump_sides')->nullable();      // e.g., ['right', 'left']
            $table->json('breast_pain_sides')->nullable();      // e.g., ['right', 'neither']
            $table->json('breast_swelling_sides')->nullable();  // e.g., ['left']
            $table->json('nipple_discharge_sides')->nullable(); // e.g., ['right', 'left']
            $table->json('bleeding_from_nipple_sides')->nullable(); // e.g., ['right']
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
        Schema::dropIfExists('patient_histories_11');
    }
}
