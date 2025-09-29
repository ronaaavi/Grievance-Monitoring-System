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
Route::view('/staff/grievances', 'staff.grievances')->name('staff.grievances');
Route::view('/staff/profile', 'staff.profile')->name('staff.profile');

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
*/
Route::view('/student/dashboard', 'student.dashboard')->name('student.dashboard');
Route::view('/student/grievances', 'student.grievances')->name('student.grievances');
Route::view('/student/profile', 'student.profile')->name('student.profile');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
Route::view('/admin/manage-staff', 'admin.manage-staff')->name('admin.manage-staff');
Route::view('/admin/manage-students', 'admin.manage-students')->name('admin.manage-students');
// Show the edit form for a student
Route::get('/admin/manage-students/{id}/edit', function ($id) {
    // TODO: Replace with your actual controller and logic
    return "Edit student form for ID: $id (implement view/controller)";
})->name('admin.students.edit');

// Delete a student
Route::delete('/admin/manage-students/{id}', function ($id) {
    // TODO: Replace with your actual controller and logic
    // Perform delete logic here
    return redirect()->route('admin.manage-students');
})->name('admin.students.destroy');
// Show the edit form for a grievance report
Route::get('/admin/all-grievances-reports/{id}/edit', function ($id) {
    // TODO: Replace with your actual controller and logic
    return "Edit grievance report form for ID: $id (implement view/controller)";
})->name('admin.all-grievances-reports.edit');

// Delete a grievance report
Route::delete('/admin/all-grievances-reports/{id}', function ($id) {
    // TODO: Replace with your actual controller and logic
    // Perform delete logic here
    return redirect()->route('admin.all-grievances-reports');
})->name('admin.all-grievances-reports.destroy');
Route::view('/admin/all-grievances-reports', 'admin.all-grievances-reports')->name('admin.all-grievances-reports');
Route::view('/admin/action-history', 'admin.action-history')->name('admin.action-history');
// Show the edit form for an action history entry
Route::get('/admin/action-history/{id}/edit', function ($id) {
    // TODO: Replace with your actual controller and logic
    return "Edit action history entry form for ID: $id (implement view/controller)";
})->name('admin.action-history.edit');

// Delete an action history entry
Route::delete('/admin/action-history/{id}', function ($id) {
    // TODO: Replace with your actual controller and logic
    // Perform delete logic here
    return redirect()->route('admin.action-history');
})->name('admin.action-history.destroy');
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
