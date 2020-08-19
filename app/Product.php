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
        'celiacs'=> 'boolean',
        'organic'=> 'boolean',
        'agroecological'=> 'boolean',
        'active'=> 'boolean'
    ];

    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }

    public function brand()
    {
        return $this->hasOne('App\Brand', 'id', 'brand_id');
    }

}
