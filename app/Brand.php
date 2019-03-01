<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';
    protected $fillable = ['name', 'image', 'title', 'subtitle'];

    public function product()
    {
        return $this->hasMany('App\Product');
    }


}

