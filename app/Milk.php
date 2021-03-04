<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milk extends Model
{
    protected $fillable = [
        'user_id','animal_id','shift','quantity'
    ];
}
