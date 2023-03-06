<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituteClassBatchTimeSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_class_batch_time_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('day',45)->nullable();
            $table->time('time')->nullable();
            $table->bigInteger('institute_class_institute_class_subject_id')->nullable();
            $table->bigInteger('institute_class_institute_class_subject_institute_classes_id')->unsigned()->nullable();
            $table->bigInteger('institute_class_institute_class_subject_institute_class_subjects_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::create('institute_class_batche_institute_class_batch_time_schedule', function (Blueprint $table) {
            $table->bigInteger('institute_class_batches_id')->unsigned();
            $table->bigInteger('institute_class_batch_time_schedules_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institute_class_batch_time_schedules');
    }
}
