<?php

namespace Database\Seeders;

use App\Models\Accounts\AccountCategory;
use App\Models\Accounts\BranchAccount;
use App\Models\Accounts\BranchAccountLog;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BranchAccount::truncate();
        AccountCategory::truncate();
        BranchAccountLog::truncate();

        $account_category = new AccountCategory();
        $account_category->title = "Office Rent";
        $account_category->description = "Monthly rent of the office";
        $account_category->save();

        $account_category = new AccountCategory();
        $account_category->title = "Current bill";
        $account_category->description = "Monthly current bill of the office";
        $account_category->save();

        $account_category = new AccountCategory();
        $account_category->title = "Water bill";
        $account_category->description = "Monthly water bill of the office";
        $account_category->save();

        $account_category = new AccountCategory();
        $account_category->title = "Maintainance";
        $account_category->description = "Monthly maintainance cost of the office";
        $account_category->save();


        $branch_account = new BranchAccount();
        $branch_account->branch_id = 1;
        $branch_account->title = "Bkash";
        $branch_account->decription = "bkash merchant account";
        $branch_account->account_mobile_no = "01757867854";
        $branch_account->account_email = "farmgate_branch@gmail.com";
        $branch_account->save();

        $branch_account = new BranchAccount();
        $branch_account->branch_id = 1;
        $branch_account->title = "Bank account";
        $branch_account->decription = "Bank account of the branch";
        $branch_account->account_no = "CITY2015851";
        $branch_account->account_mobile_no = "01757867854";
        $branch_account->account_mobile_no = "farmgate_branch@gmail.com";
        $branch_account->save();

        $branch_account = new BranchAccount();
        $branch_account->branch_id = 2;
        $branch_account->title = "Bkash";
        $branch_account->decription = "bkash merchant account";
        $branch_account->account_mobile_no = "01757867855";
        $branch_account->account_email = "mirpur_branch@gmail.com";
        $branch_account->save();

        $branch_account = new BranchAccount();
        $branch_account->branch_id = 2;
        $branch_account->title = "Bank account";
        $branch_account->decription = "Bank account of the branch";
        $branch_account->account_no = "CITY2015852";
        $branch_account->account_mobile_no = "01757867855";
        $branch_account->account_mobile_no = "mirpur_branch@gmail.com";
        $branch_account->save();

        $branch_account = new BranchAccount();
        $branch_account->branch_id = 3;
        $branch_account->title = "Bkash";
        $branch_account->decription = "bkash merchant account";
        $branch_account->account_mobile_no = "01757867857";
        $branch_account->account_email = "uttora_branch@gmail.com";
        $branch_account->save();

        $branch_account = new BranchAccount();
        $branch_account->branch_id = 3;
        $branch_account->title = "Bank account";
        $branch_account->decription = "Bank account of the branch";
        $branch_account->account_no = "CITY2015853";
        $branch_account->account_mobile_no = "01757867857";
        $branch_account->account_mobile_no = "uttora_branch@gmail.com";
        $branch_account->save();

        $this->call([
            AccountLogSeeder::class,
        ]);
    }
}
