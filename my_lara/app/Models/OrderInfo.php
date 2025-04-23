<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderInfo extends Model
{
    protected $table = 'order_info';

    protected $primaryKey = 'order_id';

    protected $fillable = [
        'user_id', 'delivery_address', 'phone_number', 'payment_method', 'card_info'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function items()
    {
        return $this->belongsToMany(Item::class, 'Order', 'order_id', 'item_id')
            ->withPivot('size');
    }
}
