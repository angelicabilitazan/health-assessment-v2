<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientExam6Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_exam_6', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            // Ear examination fields (checkboxes for side-specific findings, stored as JSON array)
            $table->json('drum_red_sides')->nullable();      // e.g., ['right', 'left']
            $table->json('ear_discharge_sides')->nullable(); // e.g., ['right', 'neither'] - note: this might be a duplicate if ear_discharge_sides is already in ent_histories, confirm if it's an exam finding or history. Assuming it's an exam finding here.
            $table->json('perforation_sides')->nullable();   // e.g., ['left']
            $table->json('glue_sides')->nullable();          // e.g., ['right', 'left']
            $table->json('canal_red_sides')->nullable();     // e.g., ['right']
            $table->json('wax_sides')->nullable();           // e.g., ['left', 'neither']
            $table->json('fb_sides')->nullable();            // FB (Foreign Body) - e.g., ['right']

            // Throat examination fields
            $table->boolean('red_throat')->nullable(); // Radio button: yes/no
            $table->json('pus_on_tonsils_sides')->nullable(); // Checkbox: right/left/neither
            $table->json('enlarged_tonsils_sides')->nullable(); // Checkbox: right/left/neither

            // Nose examination fields (checkboxes for side-specific findings, stored as JSON array)
            $table->json('nose_discharge_sides')->nullable(); // e.g., ['right', 'left']
            $table->json('nasal_obstruction_sides')->nullable(); // e.g., ['right']
            $table->json('nose_redness_sides')->nullable();   // e.g., ['left']
            $table->json('nasal_fb_sides')->nullable();       // Nasal FB (Foreign Body) - e.g., ['neither']

            // Mouth examination fields
            $table->boolean('mouth_lesion')->nullable(); // Radio button: yes/no
            $table->text('mouth_lesion_description')->nullable(); // Text input for description
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
        Schema::dropIfExists('patient_exam_6');
    }
}
