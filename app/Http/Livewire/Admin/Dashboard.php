<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Student;
use App\Models\Instructor;
use App\Models\Course;
use App\Models\Enrollment;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard', [
            'studentsCount'    => Student::count(),
            'instructorsCount' => Instructor::count(),
            'coursesCount'     => Course::count(),
            'enrollmentsCount' => Enrollment::count(),
        ]);
    }
}
