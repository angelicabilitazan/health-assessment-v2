<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientHistories1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_histories_1', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');

            $table->boolean('fever')->nullable();
            $table->boolean('lethargy')->nullable();
            $table->boolean('malaise')->nullable();
            $table->boolean('anorexia')->nullable();
            $table->boolean('nausea')->nullable();
            $table->boolean('giddiness')->nullable();
            $table->boolean('weightloss')->nullable();
            $table->boolean('weightgain')->nullable();
            $table->boolean('recenttravel')->nullable();
            $table->boolean('lossoftaste')->nullable();
            $table->boolean('lossofsmell')->nullable();

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
        Schema::dropIfExists('patient_histories_1');
    }
}
