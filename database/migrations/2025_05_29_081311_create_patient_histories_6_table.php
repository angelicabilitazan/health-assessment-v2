<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientHistories6Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_histories_6', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
             // Checkboxes for side-specific symptoms (can be multiple, stored as JSON array)
            $table->json('earache_sides')->nullable();      // e.g., ['right', 'left']
            $table->json('ear_discharge_sides')->nullable(); // e.g., ['right', 'neither']
            $table->json('deafness_sides')->nullable();     // e.g., ['left']

            // Radio button fields for 'yes'/'no' responses
            $table->boolean('rhinorrhoea')->nullable();
            $table->boolean('epistaxis')->nullable();
            $table->boolean('nasal_congestion')->nullable();
            $table->boolean('sore_throat')->nullable();
            $table->boolean('hoarse_voice')->nullable();
            $table->boolean('lost_voice')->nullable();
            $table->boolean('facial_pain')->nullable();
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
        Schema::dropIfExists('patient_histories_6');
    }
}
