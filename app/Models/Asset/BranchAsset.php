<?php

namespace App\Models\Asset;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchAsset extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->hasOne(AssetCategory::class, 'id');
    }
    public function shops()
    {
        return $this->belongsToMany(AssetShop::class);
    }
}
