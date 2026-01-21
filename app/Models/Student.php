<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    // One-to-One
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // Many-to-Many
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'enrollments')
            ->withPivot('status', 'enrolled_at')
            ->withTimestamps();
    }
}
