<?php

namespace App\Models\Institute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteClassBatchTimeSchedule extends Model
{
    use HasFactory;


    public function batch()
    {
        return $this->belongsToMany(InstituteClassBatch::class);
    }
}
