<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientHistories5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_histories_5', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
             // All fields are radio buttons with 'yes'/'no' values,
            // so boolean type is appropriate. They are nullable.
            $table->boolean('dysuria')->nullable();
            $table->boolean('frequency')->nullable();
            $table->boolean('nocturia')->nullable();
            $table->boolean('right_loin_pain')->nullable();
            $table->boolean('left_loin_pain')->nullable();
            $table->boolean('suprapubic_pain')->nullable();
            $table->boolean('haematuria')->nullable();
            $table->boolean('urgency')->nullable();
            $table->boolean('stress_incontinence')->nullable();
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
        Schema::dropIfExists('patient_histories_5');
    }
}
