<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'user_id', 'amount', 'ticket_code', 'game_id','payment_method',
    ];

    function user(){
        return $this->belongsTo(User::class,  'user_id');
    }
}
