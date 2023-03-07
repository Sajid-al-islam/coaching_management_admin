<?php

namespace App\Models\Order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    use HasFactory;

    public function order_details()
    {
        return $this->hasMany(ProductOrderDetail::class);
    }
}
