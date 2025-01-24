<?php

namespace App\Models;

use App\Models\States;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    public function states(){
        return $this->hasMany(States::class, 'country_id');
    }
}
