<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;

class Roles extends Model
{
    //
    protected $table = "roles";

    public function users(){
        return $this->hasMany(User::class, "role_id");
    }
}
