<?php

namespace Database\Seeders;

use App\Models\Order\ProductOrder;
use App\Models\Order\ProductOrderDetail;
use Illuminate\Database\Seeder;

class PorductOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductOrder::truncate();
        ProductOrderDetail::truncate();
        $product_order = new ProductOrder();
        $product_order->invoice_id = uniqid();
        $product_order->total_amount = 640;
        $product_order->paid_amount = 640;
        $product_order->status = "pending";
        $product_order->save();

        $product_order_detail = new ProductOrderDetail();
        $product_order_detail->product_id = 1;
        $product_order_detail->qty = 5;
        $product_order_detail->price = 125;
        $product_order_detail->discount = 10;
        $product_order_detail->total = 640;

        $product_order = new ProductOrder();
        $product_order->invoice_id = uniqid();
        $product_order->total_amount = 3600;
        $product_order->paid_amount = 3600;
        $product_order->status = "pending";
        $product_order->save();

        $product_order = new ProductOrder();
        $product_order->invoice_id = uniqid();
        $product_order->total_amount = 3700;
        $product_order->paid_amount = 3700;
        $product_order->status = "pending";
        $product_order->save();

        $product_order = new ProductOrder();
        $product_order->invoice_id = uniqid();
        $product_order->total_amount = 5700;
        $product_order->paid_amount = 5700;
        $product_order->status = "pending";
        $product_order->save();
    }
}
