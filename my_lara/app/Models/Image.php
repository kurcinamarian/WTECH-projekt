<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'Images';

    protected $fillable = [
        'item_id', 'image'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
