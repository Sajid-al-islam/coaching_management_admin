<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituteClassSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_class_subjects', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->nullable();
            $table->timestamps();
        });

        Schema::create('institute_class_institute_class_subject', function (Blueprint $table) {
            $table->bigInteger('institute_classes_id')->unsigned();
            $table->bigInteger('institute_class_subjects_id')->unsigned();
            $table->string('institute_class_institute_class_subject_id',45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institute_class_subjects');
    }
}
