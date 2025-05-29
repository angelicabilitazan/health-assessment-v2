<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientHistories7Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_histories_7', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
             // Checkboxes for side-specific symptoms (can be multiple, stored as JSON array)
            $table->json('visual_deterioration_sides')->nullable(); // e.g., ['right', 'left']
            $table->json('visual_loss_sides')->nullable();        // e.g., ['right', 'neither']
            $table->json('something_in_eye_sides')->nullable();   // e.g., ['left']
            $table->json('itchy_eye_sides')->nullable();          // e.g., ['right', 'left']
            $table->json('red_eye_sides')->nullable();            // e.g., ['right']
            $table->json('sore_eye_sides')->nullable();           // e.g., ['left', 'neither']
            $table->json('watering_eye_sides')->nullable();       // e.g., ['right']
            $table->json('eye_discharge_sides')->nullable();      // e.g., ['left', 'neither']

            // Radio button field for 'yes'/'no' response
            $table->boolean('double_vision')->nullable();
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
        Schema::dropIfExists('patient_histories_7');
    }
}
