<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MobileRecharge extends Model
{
    protected $fillable = ['number','operator_id','amount'];
    public function operator(){
        return $this->belongsTo(Operator::class);
    }
}
