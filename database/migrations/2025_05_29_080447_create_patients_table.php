<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            // Patient Details
            $table->string('first_name');
            $table->string('last_name');
            $table->string('preferred_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('admitted_location')->nullable();
            $table->date('admission_date')->nullable();
            $table->string('acf_id')->nullable();
            $table->string('medicare_no')->nullable();
            $table->string('pension_no')->nullable();

            // Next of Kin
            $table->string('kin_name')->nullable();
            $table->string('kin_phone')->nullable();
            $table->string('kin_work')->nullable();
            $table->string('kin_mobile')->nullable();

            // Family History
            $table->boolean('family_history_unknown')->default(false)->nullable();
            $table->boolean('family_history_none')->default(false)->nullable();

            // Medical History
            $table->text('allergy_history')->nullable();
            $table->text('past_medical_history')->nullable();

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
        Schema::dropIfExists('patients');
    }
}
