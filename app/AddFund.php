<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddFund extends Model
{
    protected $fillable = ['amount','transition_id','date','payment_method_id','details'];

    public function payment_method(){
        return $this->belongsTo(PaymentMethod::class);
    }
}
