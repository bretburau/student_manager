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
}
