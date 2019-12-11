<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'name','detail','contact_number','active','photo','category_id'
    ];
}
