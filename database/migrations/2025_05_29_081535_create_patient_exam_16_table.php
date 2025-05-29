<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientExam16Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_exam_16', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
             $table->string('marital_status')->nullable();
            $table->string('sexuality')->nullable();
            $table->boolean('elite_athlete')->nullable(); // 'yes'/'no' radio button
            $table->string('advance_health_directive')->nullable();
            $table->string('enduring_power_of_attorney')->nullable();
            $table->string('on_screen_comment')->nullable();
            $table->string('recreational_activities')->nullable();
            $table->string('accommodation')->nullable();
            $table->string('lives_with')->nullable();
            $table->string('has_carer')->nullable();
            $table->string('carer_details')->nullable();
            $table->string('is_carer')->nullable();
            $table->boolean('safe_home')->nullable(); // 'yes'/'no' radio button
            $table->string('other_social_history')->nullable();
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
        Schema::dropIfExists('patient_exam_16');
    }
}
