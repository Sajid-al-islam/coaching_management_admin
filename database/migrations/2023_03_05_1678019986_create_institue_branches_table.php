<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitueBranchesTable extends Migration
{
	public function up()
	{
		Schema::create('institue_branches', function (Blueprint $table) {
			$table->id();
			$table->string('name', 100)->nullable();
			$table->string('street', 50)->nullable();
			$table->string('city', 50)->nullable();
			$table->string('state', 50)->nullable();
			$table->string('zip_code', 50)->nullable();
			$table->string('country', 50)->nullable();
			$table->bigInteger('institute_classes_id',)->unsigned();
			$table->bigInteger('creator',)->unsigned()->nullable();
			$table->string('slug', 50)->nullable();
			$table->tinyInteger('status',)->nullable()->default('1');
			$table->timestamps();
		});

		Schema::create('institue_branch_admin', function (Blueprint $table) {
			$table->bigInteger('institue_branches_id')->unsigned();
			$table->bigInteger('users_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::dropIfExists('institue_branches');
	}
}
