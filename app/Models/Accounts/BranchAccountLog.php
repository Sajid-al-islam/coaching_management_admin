<?php

namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchAccountLog extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->hasOne(AccountCategory::class);
    }   
}
