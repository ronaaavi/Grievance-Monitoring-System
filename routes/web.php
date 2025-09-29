<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Staff Routes
|--------------------------------------------------------------------------
*/
Route::view('/staff/dashboard', 'staff.dashboard')->name('staff.dashboard');
Route::view('/staff/file-grievances', 'staff.file-grievances')->name('staff.file-grievances');
Route::view('/staff/profile', 'staff.profile')->name('staff.profile');

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
*/
Route::view('/student/dashboard', 'student.dashboard')->name('student.dashboard');
Route::view('/student/grievances', 'student.grievances')->name('student.grievances');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
Route::view('/admin/manage-staff', 'admin.manage-staff')->name('admin.manage-staff');
Route::view('/admin/manage-students', 'admin.manage-students')->name('admin.manage-students');
Route::view('/admin/grievancereports', 'admin.grievancereports')->name('admin.grievancereports');
Route::view('/admin/action-history', 'admin.action-history')->name('admin.action-history');
Route::view('/admin/profile', 'admin.profile')->name('admin.profile');
Route::view('/admin/settings', 'admin.settings')->name('admin.settings');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::view('/login', 'login')->name('login');

// Logout route
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login');
})->name('logout');

/*
|--------------------------------------------------------------------------
| Default Redirect
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect()->route('login');
});

Route::view('/request', 'request')->name('request');
