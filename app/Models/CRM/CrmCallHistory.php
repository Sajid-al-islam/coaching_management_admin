<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrmCallHistory extends Model
{
    use HasFactory;

    public function communication_topic()
    {
        return $this->hasOne(CrmCommunicatoinTopic::class);
    }
}
