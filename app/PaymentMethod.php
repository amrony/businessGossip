<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    public function add_funds(){
        return $this->hasMany(AddFund::class);
    }
}
