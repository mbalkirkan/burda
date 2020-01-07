<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'product_name','name','detail','contact_number','active','gender','category_id','type_id','address','operation_type'
    ];
}
