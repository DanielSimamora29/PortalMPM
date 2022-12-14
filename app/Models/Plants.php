<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Plants extends Model
{
    protected $table = "plants";

    public function users(){
        return $this->hasMany(User::class, "plants_id");
    }
}
