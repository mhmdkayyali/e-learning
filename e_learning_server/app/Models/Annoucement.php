<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annoucement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'course_id'
    ];
}
