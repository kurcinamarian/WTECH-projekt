<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Categories';

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'main_category', 'secondary_category'
    ];

    public function items()
    {
        return $this->hasMany(Item::class, 'category_id');
    }
}
