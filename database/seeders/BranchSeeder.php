<?php

namespace Database\Seeders;

use App\Models\Institute\InstituteBranch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InstituteBranch::truncate();

        $instituteBranch = new InstituteBranch();
        $instituteBranch->name = "Farmgate branch";
        $instituteBranch->street = "Green road, road no-2";
        $instituteBranch->city = "Dhaka";
        $instituteBranch->state = "Dhaka, Bangladesh";
        $instituteBranch->zip_code = "1216";
        $instituteBranch->country = "Bangladesh";
        $instituteBranch->save();
        $instituteBranch->user()->attach([3]);
    }
}
