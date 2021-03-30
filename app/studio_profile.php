<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studio_profile extends Model
{
    protected $fillable = [
        'name', 'address','studio_image','phone','location','email'
    ];
}
