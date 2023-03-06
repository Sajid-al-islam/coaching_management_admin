<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_shops', function (Blueprint $table) {
            $table->id();
            $table->string('title',45)->nullable();
            $table->string('address',45)->nullable();
            $table->string('contact_number',45)->nullable();
            $table->timestamps();
        });

        Schema::create('branch_assets_has_asset_shops', function (Blueprint $table) {
            $table->bigInteger('branch_assets_id',)->unsigned();
            $table->bigInteger('asset_shops_id',)->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_shops');
    }
}
