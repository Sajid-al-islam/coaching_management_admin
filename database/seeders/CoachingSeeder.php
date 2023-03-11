<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoachingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AssetCategorySeeder::class,
            AssetShopSeeder::class,
            BranchAssetSeeder::class,
            BranchSeeder::class
        ]);
    }
}
