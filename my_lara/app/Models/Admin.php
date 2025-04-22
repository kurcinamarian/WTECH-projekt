<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'Admin';

    protected $primaryKey = 'admin_id';

    protected $fillable = [
        'admin_password'
    ];
}
