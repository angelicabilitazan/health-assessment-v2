<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientHistories9Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_histories_9', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
             // Radio button fields for 'yes'/'no' responses
            $table->boolean('neck_pain')->nullable();
            $table->boolean('back_pain')->nullable();
            $table->boolean('injury')->nullable();

            // Checkboxes for side-specific pain (can be multiple, stored as JSON array)
            $table->json('shoulder_pain_sides')->nullable(); // e.g., ['right', 'left']
            $table->json('hip_pain_sides')->nullable();      // e.g., ['right', 'neither']
            $table->json('elbow_pain_sides')->nullable();    // e.g., ['left']
            $table->json('knee_pain_sides')->nullable();     // e.g., ['right', 'left']
            $table->json('wrist_pain_sides')->nullable();    // e.g., ['right']
            $table->json('ankle_pain_sides')->nullable();    // e.g., ['left', 'neither']
            $table->json('hand_pain_sides')->nullable();     // e.g., ['right']
            $table->json('foot_pain_sides')->nullable();     // e.g., ['left', 'neither']
            $table->json('finger_pain_sides')->nullable();   // e.g., ['right']
            $table->json('toe_pain_sides')->nullable();      // e.g., ['left', 'neither']
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
        Schema::dropIfExists('patient_histories_9');
    }
}
