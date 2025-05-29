<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientHistories2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_histories_2', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('patient_id');
            // Radio button fields for 'yes'/'no' responses
            $table->boolean('chest_pain')->nullable();
            $table->boolean('dyspnoea')->nullable();
            $table->boolean('orthopnoea')->nullable();
            $table->boolean('nocturnal_dyspnoea')->nullable();
            $table->boolean('swollen_ankles')->nullable();
            $table->boolean('palpitations')->nullable();

            // For 'claudication', which has multiple text options (Yes, No, Both, Neither)
            $table->string('claudication')->nullable(); // Stores 'yes', 'no', 'both', or 'neither'

            $table->timestamps(); // Adds `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_histories_2');
    }
}
