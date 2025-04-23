<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $primaryKey = null;
    public $incrementing = false;

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }

    // Relationship with OrderInfo
    public function orderInfo()
    {
        return $this->belongsTo(OrderInfo::class, 'order_id');
    }
}
