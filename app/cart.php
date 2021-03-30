<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $fillable = [
        'product_id', 'qty', 'price','cover_image','customer_mail'
    ];
}
