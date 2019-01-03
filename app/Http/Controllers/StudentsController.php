<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
        $students = auth()->user()->students;
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store()
    {
        $id = auth()->id();
        $attributes = $this->validateStudent();
        $attributes['teacher_id'] =$id;
        // dd($attributes);
        $attributes['bus_number'] == 0 ? $attributes['riding_bus'] = true : $attributes['riding_bus'] = false;
        Student::create($attributes);
        return redirect("/students/$id");
    }

    public function show(Student $student)
    {
        dd($student);
    }

    public function validateStudent()
    {
        return request()->validate([
            'name' => ['required'],
            'grade' => ['required'],
            'parent_email' => ['required'],
            'bus_number' => ['required']
        ]);
    }
}