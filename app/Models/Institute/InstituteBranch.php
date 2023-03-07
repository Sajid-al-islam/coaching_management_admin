<?php

namespace App\Models\Institute;

use App\Models\Asset\BranchAsset;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteBranch extends Model
{
    use HasFactory;
    
    public function assets()
    {
        return $this->hasMany(BranchAsset::class);
    }
}
