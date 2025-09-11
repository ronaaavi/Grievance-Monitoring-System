<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Staff Routes
|--------------------------------------------------------------------------
*/
Route::view('/staff/dashboard', 'staff.dashboard');                  // Staff dashboard
Route::view('/staff/file-grievances', 'staff.file-grievances');      // File grievances form

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
*/
Route::view('student/dashboard', 'student.dashboard')->name('student.dashboard');             // Student dashboard

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::view('/admin/dashboard', 'admin.dashboard');                  // Admin dashboard

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::view('/login', 'login');                                      // Login page

/*
|--------------------------------------------------------------------------
| Default Redirect
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect('/login');
});
