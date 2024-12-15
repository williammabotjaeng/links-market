<?php
use Illuminate\Support\Facades\Route;

// Welcome Page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Performance Analytics Page
Route::get('/performance', function () {
    return view('performance.index', [
        'impressions' => 1000, // Example data
        'views' => 500,        // Example data
        'orders' => 50,        // Example data
        'salesPercentage' => 5, // Example data
        'rankChange' => 2      // Example data for ranking
    ]);
})->name('performance.index');

// Sponsored Sites Page
Route::get('/sponsored', function () {
    return view('sponsored.index');
})->name('sponsored.index');

// Link Insertions Page
Route::get('/link-insertions', function () {
    return view('link-insertions.index');
})->name('link-insertions.index');

// Authentication Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Add routes for authenticated users
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Create this view as needed
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::post('/logout', function () {
        // Handle logout logic
    })->name('logout');
});