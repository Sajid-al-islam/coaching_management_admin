<?php

namespace App\Models\Institute;

use App\Models\Asset\BranchAsset;
use App\Models\CRM\CrmSmsTemplate;
use App\Models\CRM\Customers;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteBranch extends Model
{
    use HasFactory;
    
    public function assets()
    {
        return $this->hasMany(BranchAsset::class);
    }

    public function institute_contact()
    {
        return $this->hasMany(InstituteContact::class);
    }

    public function classes()
    {
        return $this->hasMany(InstituteClass::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function branch_teacher()
    {
        return $this->belongsToMany(InstituteTeacher::class);
    }

    public function customers()
    {
        return $this->hasMany(Customers::class);
    }

    public function sms_templates()
    {
        return $this->hasMany(CrmSmsTemplate::class);
    }
}
