<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientHistories4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_histories_4', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
             // All fields are radio buttons with 'yes'/'no' values,
            // so boolean type is appropriate. They are nullable.
            $table->boolean('headache')->nullable();
            $table->boolean('neck_stiffness')->nullable();
            $table->boolean('photophobia')->nullable();
            $table->boolean('hyperacusis')->nullable();
            $table->boolean('fits')->nullable();
            $table->boolean('faints')->nullable();
            $table->boolean('weakness')->nullable();
            $table->boolean('numbness')->nullable();
            $table->boolean('slurred_speech')->nullable();
            $table->boolean('incoordination')->nullable();
            $table->boolean('confusion')->nullable();
            $table->boolean('disorientation')->nullable();
            $table->boolean('tremor')->nullable();
            
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
        Schema::dropIfExists('patient_histories_4');
    }
}
