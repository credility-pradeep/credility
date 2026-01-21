<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'phone',
        'date_of_birth',
        'address'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
