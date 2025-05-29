<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientHistories3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_histories_3', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            // All fields are radio buttons with 'yes'/'no' values,
            // so boolean type is appropriate. They are nullable as per typical form data.
            $table->boolean('abdominal_pain')->nullable();
            $table->boolean('nausea')->nullable();
            $table->boolean('vomiting')->nullable();
            $table->boolean('heartburn')->nullable();
            $table->boolean('dysphagia')->nullable();
            $table->boolean('anorexia')->nullable();
            $table->boolean('reflux')->nullable();
            $table->boolean('haematemesis')->nullable();
            $table->boolean('weight_loss')->nullable();
            $table->boolean('diarrhoea')->nullable();
            $table->boolean('constipation')->nullable();
            $table->boolean('changed_bowel_habit')->nullable();
            $table->boolean('pr_bleeding')->nullable(); // PR bleeding (Per Rectal bleeding)
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
        Schema::dropIfExists('patient_histories_3');
    }
}
