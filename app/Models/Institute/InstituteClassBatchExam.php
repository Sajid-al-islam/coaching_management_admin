<?php

namespace App\Models\Institute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteClassBatchExam extends Model
{
    use HasFactory;

    public function mark()
    {
        return $this->hasOne(InstituteClassBatchExamMark::class);
    }
}
