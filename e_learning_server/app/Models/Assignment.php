<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    public function courses() {
        return $this->belongsTo(Course::class, "course_id");
    }

    protected $fillable = [
        'title',
        'content',
        'course_id'
    ];
}
