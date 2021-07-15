<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'title', 'code',  'category','desc', 'startdate','enddate','price', 'max_play', 'no_winners','banner_img','icon_img','status',
    ];
}
