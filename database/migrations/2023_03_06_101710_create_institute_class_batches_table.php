<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituteClassBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_class_batches', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->nullable();
		    $table->bigInteger('institute_classes_id',)->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::create('institute_class_batch_institute_teacher', function (Blueprint $table) {
            $table->bigInteger('institute_class_batches_id',)->unsigned()->nullable();
            $table->bigInteger('institute_teachers_id',)->unsigned()->nullable();
        });

        Schema::create('institute_class_batch_institute_student', function (Blueprint $table) {
            $table->bigInteger('institute_class_batches_id',)->unsigned()->nullable();
            $table->bigInteger('institute_students_id',)->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institute_class_batches');
    }
}
