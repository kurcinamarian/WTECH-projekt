<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    public $timestamps = false;

    protected $primaryKey = 'item_id';

    protected $fillable = [
        'item_id','item_name', 'price', 'description', 'parameters',
        'category_id', 'main_category', 'style_fabric', 'colour',
        'times_bought', 'release_date'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function shoppingCarts()
    {
        return $this->belongsToMany(User::class, 'Shopping_cart', 'item_id', 'user_id')
            ->withPivot('size');
    }

    public function likedUsers()
    {
        return $this->belongsToMany(User::class, 'Liked', 'item_id', 'user_id');
    }

    public function orders()
    {
        return $this->belongsToMany(OrderInfo::class, 'Order', 'item_id', 'order_id')
            ->withPivot('size');
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'item_id', 'item_id');
    }

    public function scopeSearch($query, $searchTerm)
    {
        if ($searchTerm) {
            return $query->where('item_name', 'like', "%$searchTerm%")
                ->orWhere('description', 'like', "%$searchTerm%");
        }

        return $query;
    }
}
