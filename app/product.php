<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['name', 'price', 'image1', 'stock', 'idbrand'];


    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
