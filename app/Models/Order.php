<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function country_name(){
        return $this->belongsTo(Countries::class, 'country_id');
    }
    public function state_name(){
        return $this->belongsTo(States::class, 'state');
    }
    public function orderProduct(){
        return $this->hasMany(OrderProduct::class, 'order_id');
    }

}
