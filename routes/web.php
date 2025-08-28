<?php

use Illuminate\Support\Facades\Route;

Route::view('/dashboard', 'dashboard');   // view at resources/views/dashboard.blade.php

// Optional: make dashboard the home page while designing
Route::get('/', fn () => view('dashboard'));
