<?php

namespace Database\Seeders;

use App\Models\Product\Product;
use App\Models\Product\ProductStock;
use App\Models\Product\ProductStockLog;
use App\Models\Product\ProductSupplier;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        ProductStock::truncate();
        ProductStockLog::truncate();

        // product 1
        $product = new Product();
        $product->title = "SSC Note English 1st paper";
        $product->price = 150;
        $product->image = "test/english.jpeg";
        $product->save();

        $product_stock = new ProductStock();
        $product_stock->product_id = $product->id;
        $product_stock->qty = 10;
        $product_stock->date = Carbon::now()->toDateString();
        $product_stock->supplier_id = 1;
        $product_stock->save();

        // product 2
        $product2 = new Product();
        $product2->title = "HSC math note book";
        $product2->price = 150;
        $product2->image = "test/math.jpg";
        $product2->save();

        $product_stock = new ProductStock();
        $product_stock->product_id = $product2->id;
        $product_stock->qty = 12;
        $product_stock->date = Carbon::now()->toDateString();
        $product_stock->supplier_id = 2;
        $product_stock->save();


        // product 3
        $product3 = new Product();
        $product3->title = "HSC Chemistry note book";
        $product3->price = 150;
        $product3->image = "test/chemistry.png";
        $product3->save();

        $product_stock = new ProductStock();
        $product_stock->product_id = $product3->id;
        $product_stock->qty = 5;
        $product_stock->date = Carbon::now()->toDateString();
        $product_stock->supplier_id = 2;
        $product_stock->save();

        $this->call([
            ProductSupplierSeeder::class,
            ProductOrderSeeder::class,
        ]);
    }
}
