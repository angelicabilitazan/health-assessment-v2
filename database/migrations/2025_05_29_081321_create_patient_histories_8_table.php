<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientHistories8Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_histories_8', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            // All fields are radio buttons with 'yes'/'no' values,
            // so boolean type is appropriate. They are nullable.
            $table->boolean('rash')->nullable();
            $table->boolean('itch')->nullable();
            $table->boolean('lesion')->nullable();
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
        Schema::dropIfExists('patient_histories_8');
    }
}
