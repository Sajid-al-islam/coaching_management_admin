<?php

namespace App\Models\Institute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteClassSubject extends Model
{
    use HasFactory;

    public function class()
    {
        return $this->belongsToMany(InstituteClass::class);
    }

    public function time_schedule()
    {
        return $this->belongsToMany(InstituteClassBatchTimeSchedule::class);
    }
}
