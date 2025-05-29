<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientExam2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_exam_2', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');

             // Text input fields
            $table->string('jpv')->nullable(); // JPV (Jugular Venous Pressure)
            $table->string('ankle_oedema')->nullable();
            $table->string('apex_beat')->nullable(); // Apex beat
            $table->string('intercostal_space')->nullable(); // Intercostal space
            $table->string('heart_sounds')->nullable(); // Heart sounds

            // Checkbox for 'No Murmurs'
            $table->boolean('no_murmurs')->nullable(); // Renamed from heart_murmur to be clearer if checked means "no murmurs"

            // Murmur details
            $table->string('murmur_volume')->nullable();
            $table->string('murmur_description')->nullable();
            $table->string('murmur_radiation')->nullable();

            // Carotid bruit radio buttons (Yes, No, Both, Neither)
            $table->string('carotid_bruit')->nullable(); // Stores 'yes', 'no', 'both', or 'neither'

            // Peripheral pulses (Right/Left for Brachial, Radial, Femoral, Popliteal, PT, DP)
            $table->string('brachial_right')->nullable();
            $table->string('brachial_left')->nullable();
            $table->string('radial_right')->nullable();
            $table->string('radial_left')->nullable();
            $table->string('femoral_right')->nullable();
            $table->string('femoral_left')->nullable();
            $table->string('popliteal_right')->nullable();
            $table->string('popliteal_left')->nullable();
            $table->string('pt_right')->nullable(); // PT (Posterior Tibial)
            $table->string('pt_left')->nullable();
            $table->string('dp_right')->nullable(); // DP (Dorsalis Pedis)
            $table->string('dp_left')->nullable();
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
        Schema::dropIfExists('patient_exam_2');
    }
}
