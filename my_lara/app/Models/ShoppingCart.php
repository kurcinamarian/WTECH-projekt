<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    public $timestamps = false;

    protected $table = 'shopping_cart';
    protected $primaryKey = 'shopping_cart_id';

    protected $fillable = [
        'user_id', 'item_id', 'size' , 'session_id' , 'quantity'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
