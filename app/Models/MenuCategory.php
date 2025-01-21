<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    public function items()
    {
        return $this->hasMany(MenuItem::class, 'menu_category_id');
    }
}
