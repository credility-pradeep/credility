<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'bio'];

    // One-to-Many
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    // Has-Many-Through
    public function lessons()
    {
        return $this->hasManyThrough(
            Lesson::class,
            Course::class
        );
    }
}
