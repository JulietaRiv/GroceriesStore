<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $casts = [
        'presentations' => 'array',
        'organic'=> 'boolean',
        'offer'=> 'boolean',
        'highlighted'=> 'boolean',
        'for_celiacs'=> 'boolean',
        'organic'=> 'boolean',
        'agroecological'=> 'boolean',
        'active'=> 'boolean'
    ];

}
