<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'featured_image','photos','phone','address','googlemaps_address','product_category_id'
    ];
}
