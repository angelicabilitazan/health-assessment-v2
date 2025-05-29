<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientHistories10Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_histories_10', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            // All 'yes'/'no' radio button fields will be boolean
            $table->boolean('pv_bleeding')->nullable();
            $table->boolean('pv_discharge')->nullable();
            $table->boolean('amenorrhoea')->nullable();
            $table->boolean('dysmenorrhoea')->nullable();
            $table->boolean('vulval_itch')->nullable();
            $table->boolean('intermenstrual_bleeding')->nullable();
            $table->boolean('post_coital_bleeding')->nullable();
            $table->boolean('post_menopausal_bleeding')->nullable();
            $table->boolean('dyspareunia')->nullable();
            $table->boolean('unprotected_intercourse')->nullable();
            $table->boolean('heavy_periods')->nullable();
            $table->boolean('irregular_periods')->nullable();
            $table->boolean('pregnancy_test_positive')->nullable();

            // Date field for Last Menstrual Period (LMP)
            $table->date('lmp')->nullable();

            // Text field for Last Cervical Screening Test
            $table->string('last_cervical_screening')->nullable();
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
        Schema::dropIfExists('patient_histories_10');
    }
}
