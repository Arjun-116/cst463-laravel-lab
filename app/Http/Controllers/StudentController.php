<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Sub-part B & D: List students
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Sub-part B: Show create form (optional for lab, but good practice)
    public function create()
    {
        return view('students.create');
    }

    // Sub-part B & D: Store student and flash status message
    public function store(Request $request)
    {
        // Add creation logic if testing form submission
        // After saving:
        return redirect()->route('students.index')->with('status', 'Student created successfully!');
    }

    // Sub-part B & C: Show individual student page (implicit route model binding)
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
}