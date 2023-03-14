<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_accounts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('branch_id',)->nullable();
            $table->string('title',45)->nullable();
            $table->text('description')->nullable();
            $table->string('account_no', 40)->nullable();
            $table->string('account_mobile_no', 40)->nullable();
            $table->string('account_email', 50)->nullable();
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
        Schema::dropIfExists('branch_accounts');
    }
}
