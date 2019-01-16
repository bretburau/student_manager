<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'layouts.master');

use App\Student;

Route::get('/api/students/{id}', function($id) {
    return Student::find($id);
});

Route::get('/api/students', function() {
    return Student::all();
});

Route::post('/api/students/create', 'StudentsController@store');