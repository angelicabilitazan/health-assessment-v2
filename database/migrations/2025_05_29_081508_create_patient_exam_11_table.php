<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientExam11Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_exam_11', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
              // Checkboxes for "no lumps" (boolean)
            $table->boolean('no_lumps_right_breast')->nullable();
            $table->boolean('no_lumps_left_breast')->nullable();

            // Textarea for lumps description
            $table->text('lumps_description')->nullable();

            // Checkboxes for side-specific findings (can be multiple, stored as JSON array)
            $table->json('redness_sides')->nullable();
            $table->json('swelling_sides')->nullable();
            $table->json('heat_sides')->nullable();
            $table->json('discharge_sides')->nullable();
            $table->json('blood_sides')->nullable();
            $table->json('tethering_sides')->nullable();
            $table->json('nipple_inversion_sides')->nullable();
            $table->json('peau_d_orange_sides')->nullable();
            $table->json('axillary_nodes_sides')->nullable();
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
        Schema::dropIfExists('patient_exam_11');
    }
}
