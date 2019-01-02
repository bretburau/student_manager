<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $attributes = $this->validateStudent();
        dd($attributes);    
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