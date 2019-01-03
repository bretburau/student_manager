<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;

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
        $attributes['bus_number'] == 0 ? $attributes['riding_bus'] = false : $attributes['riding_bus'] = true;
        Student::create($attributes);
        return redirect("/students/$id");
    }

    public function show(Student $student)
    {
        $teacher = User::find($student->teacher_id);
        return view("students.show", compact('student', 'teacher'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Student $student)
    {
        $student->update($this->validateStudent());
        return redirect('/students');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/students');
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