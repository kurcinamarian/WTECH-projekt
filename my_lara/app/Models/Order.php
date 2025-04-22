<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'Order';

    protected $primaryKey = null;
    public $incrementing = false;

    public function orderInfo()
    {
        return $this->belongsTo(OrderInfo::class, 'order_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
