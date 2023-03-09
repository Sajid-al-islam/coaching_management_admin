<?php

namespace App\Models\Institute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteStudent extends Model
{
    use HasFactory;

    public function batch()
    {
        return $this->belongsToMany(InstituteClassBatch::class);
    }

    public function payments()
    {
        return $this->hasMany(InstituteStudentPayment::class);
    }
}
