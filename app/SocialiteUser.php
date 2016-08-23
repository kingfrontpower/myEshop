<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialiteUser extends Model
{
     protected $fillable = [
        'vendor', 'user_id',
    ];
}
