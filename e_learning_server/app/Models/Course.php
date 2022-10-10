<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, "instructor_id");
    }

    public function announcements() {
        return $this->belongsToMany(Annoucement::class, "course_id");
    }

    public function assignments() {
        return $this->belongsToMany(Assignment::class, "course_id");
    }

    public function registers() {
        return $this->belongsToMany(Register::class, "course_id");
    }

    protected $fillable = [
        'crn',
        'course_name',
        'time',
        'instructor_id'
    ];
}
