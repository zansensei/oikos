<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';
    protected $fillable = [
        'review', 'note'
    ];
    public $timestamps = true;
    public function viewReview()
    {
        return $this->hasMany('App\Review');
    }
}
