<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('product_orders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_id', 45)->nullable();
            $table->string('total_amount', 45)->nullable();
            $table->string('paid_amount', 45)->nullable();
            $table->string('status', 45)->nullable();
            $table->bigInteger('users_id',)->unsigned();
            $table->bigInteger('creator')->nullable();
            $table->string('slug',100)->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_orders');
    }
}
