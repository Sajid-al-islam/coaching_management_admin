<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituteClassBatchExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_class_batch_exams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('batch_id',)->nullable();
            $table->bigInteger('subject_id',)->nullable();
            $table->text('exam_title')->nullable();
            $table->bigInteger('institute_class_batches_id',)->unsigned();
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
        Schema::dropIfExists('institute_class_batch_exams');
    }
}
