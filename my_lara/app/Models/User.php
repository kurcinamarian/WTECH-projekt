<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'User';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'firstname', 'lastname', 'email', 'telephone_number',
        'password', 'birth_date', 'address', 'user_settings',
        'profile_image'
    ];

}
