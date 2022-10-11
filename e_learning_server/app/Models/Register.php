<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    public function courses() {
        return $this->belongsToMany(Course::class, "course_id");
    }

    public function users() {
        return $this->belongsToMany(User::class, "student_id");
    }


    protected $fillable = [
        'course_id',
        'student_id'
    ];
}

