<?php

namespace App\Models\Accounts;

use App\Models\Institute\InstituteBranch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchAccount extends Model
{
    use HasFactory;

    public function institute_branch()
    {
        return $this->hasOne(InstituteBranch::class);
    }

    public function account_logs()
    {
        return $this->hasMany(BranchAccountLog::class);
    }
}
