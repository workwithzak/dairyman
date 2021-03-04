<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    protected $fillable = [
        'name','type','color','age','user_id'
    ];

    public function milk(){
        return $this->hasMany(Milk::class);
    }
}
