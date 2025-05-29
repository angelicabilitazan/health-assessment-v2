<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientExam4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_exam_4', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
              // Tremor and rigidity fields (radio buttons: yes/no)
            $table->boolean('essential_tremor')->nullable();
            $table->boolean('intention_tremor')->nullable();
            $table->boolean('involuntary_movements')->nullable();
            $table->boolean('cogwheel_rigidity')->nullable();

            // Facial palsy, limb weakness/numbness, foot drop (checkboxes with 'right', 'left', 'neither' values)
            // Storing these as strings to capture the specific side or 'neither'.
            // If multiple are selected, you might consider a JSON column or separate boolean columns for each side.
            // For now, assuming only one option can be selected per group, or it's a single value.
            $table->string('upper_facial_palsy_side')->nullable(); // Stores 'right', 'left', or 'neither'
            $table->string('lower_facial_palsy_side')->nullable(); // Stores 'right', 'left', or 'neither'
            $table->string('arm_weakness_side')->nullable();       // Stores 'right', 'left', or 'neither'
            $table->string('leg_weakness_side')->nullable();       // Stores 'right', 'left', or 'neither'
            $table->string('arm_numbness_side')->nullable();       // Stores 'right', 'left', or 'neither'
            $table->string('leg_numbness_side')->nullable();       // Stores 'right', 'left', or 'neither'
            $table->string('foot_drop_side')->nullable();          // Stores 'right', 'left', or 'neither'

            // Eye examination fields (radio buttons: yes/no for ptosis, normal/abnormal for others)
            $table->boolean('right_eye_ptosis')->nullable();
            $table->string('right_eye_eom')->nullable(); // Stores 'normal' or 'abnormal'
            $table->string('right_eye_fields')->nullable(); // Stores 'normal' or 'abnormal'
            $table->string('right_eye_pupils')->nullable(); // Stores 'normal' or 'abnormal'

            $table->boolean('left_eye_ptosis')->nullable();
            $table->string('left_eye_eom')->nullable(); // Stores 'normal' or 'abnormal'
            $table->string('left_eye_fields')->nullable(); // Stores 'normal' or 'abnormal'
            $table->string('left_eye_pupils')->nullable(); // Stores 'normal' or 'abnormal'
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
        Schema::dropIfExists('patient_exam_4');
    }
}
