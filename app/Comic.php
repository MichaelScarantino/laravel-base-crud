<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'type',
        'series',
        'sale_date',
        'thumb',
        'price',
        'description'
    ];
}
