<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insproducts extends Model
{
    protected $fillable = [
        'proname', 'price', 'pic',
    ];
}
