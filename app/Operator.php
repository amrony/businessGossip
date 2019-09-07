<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    public function recharges(){
        return $this->hasMany(MobileRecharge::class);
    }
}
