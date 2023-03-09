<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    public function call_history()
    {
        return $this->hasMany(CrmCallHistory::class);
    }

    public function sms_history()
    {
        return $this->hasMany(CrmSmsHistory::class);
    }
}
