<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientExam7Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_exam_7', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            // Visual Acuity fields (text inputs)
            $table->string('visual_acuity_without_glasses_right')->nullable();
            $table->string('visual_acuity_without_glasses_left')->nullable();
            $table->string('visual_acuity_without_glasses_both')->nullable();
            $table->string('visual_acuity_with_glasses_right')->nullable();
            $table->string('visual_acuity_with_glasses_left')->nullable();
            $table->string('visual_acuity_with_glasses_both')->nullable();
            $table->string('foreign_body_right')->nullable();
            $table->string('foreign_body_left')->nullable();

            // Side-specific checkboxes (can be multiple, stored as JSON array)
            $table->json('redness_sides')->nullable();
            $table->json('discharge_sides')->nullable();
            $table->json('swelling_sides')->nullable();
            $table->json('ulcer_sides')->nullable();
            $table->json('pterygium_sides')->nullable();
            $table->json('ingrowing_lashes_sides')->nullable();
            $table->json('ectropion_sides')->nullable();
            $table->json('entropion_sides')->nullable();
            $table->json('hyphaema_sides')->nullable();
            $table->json('cataract_sides')->nullable();
            $table->json('papilloedema_sides')->nullable();

            // Colour vision (radio button: normal/abnormal)
            $table->string('colour_vision')->nullable(); // 'normal' or 'abnormal'

            // Retinopathy (text inputs)
            $table->string('retinopathy_right')->nullable();
            $table->string('retinopathy_left')->nullable();

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
        Schema::dropIfExists('patient_exam_7');
    }
}
