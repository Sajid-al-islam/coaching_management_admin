<?php

namespace App\Models\Institute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteClassBatch extends Model
{
    use HasFactory;

    public function batch_teachers()
    {
        return $this->belongsToMany(InstituteTeacher::class);
    }

    public function exams()
    {
        return $this->hasMany(InstituteClassBatchExam::class);
    }

    public function time_schedule()
    {
        return $this->belongsToMany(InstituteClassBatchTimeSchedule::class);
    }

    public function batch_students()
    {
        return $this->belongsToMany(InstituteStudent::class);
    }
}
