<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_role extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsToMany(User::class,"roles_id");
    }

    protected $fillable = [
        'role_name'
    ];
}
