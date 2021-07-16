<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'user_id', 'amount', 'auth_code', 'user_code','bank_name', 'teller_img', 'status','price','subscription',
        'subscription_plan','payment_plan', 'reference', 'expiresAt',
    ];

    function user(){
        return $this->belongsTo(User::class,  'user_id');
    }
}
