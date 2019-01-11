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

// Route::get('/', function () {
//     return redirect('/students');
// });

Auth::routes();

// Route::get('/home', function () { //Needs to go away, '/home' built into make:auth
//     return redirect('/students');
// });
// // Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('/students', 'StudentsController');
Route::view('/', 'layouts.master');

use App\Student;
Route::get('/api/students', function() {
    return Student::all();
});