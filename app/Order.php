<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name', 
        'email', 
        'phone_no',
        'instructions',
        'to_location',
        'from_location',
        'payment_method',
        'payment_proof'
    ];
}
