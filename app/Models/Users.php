<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model
{
    //
    protected $table = 'users';
    protected $fillable = ['id', 'name', 'username', 'password', 'role_id', 'plants_id', 'profile', 'dashboard_link'];

    public function roles(){
        return $this->belongsTo(Roles::class, "role_id", "id");
    }
    
    public function plants(){
        return $this->belongsTo(Plants::class, "plants_id", "id");
    }

    public function getAvatar()
    {
        if (!$this->profile) {
            return asset('profile/default.png');
        }
        return asset('profile/' . $this->profile);
    }
}
