<?php

namespace App\Models\Institute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteTeacher extends Model
{
    use HasFactory;

    public function branch()
    {
        return $this->belongsToMany(InstituteBranch::class);
    }

    public function batch()
    {
        return $this->belongsToMany(InstituteClassBatch::class);
    }
}
