<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function social(){
        return $this->hasMany(MemeberSocial::class, 'member_id');
    }
    public function skill(){
        return $this->hasMany(MemberSkills::class, 'member_id');
    }
    public function thumbnail(){
        return $this->hasMany(MemberThumbnail::class, 'member_id');
    }
}
