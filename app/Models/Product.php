<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function thumbnail(){
        return $this->hasMany(Thumbnail::class);
    }
}
