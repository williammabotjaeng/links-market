<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Welcome Page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// 404 Page
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Performance Analytics Page
Route::get('/performance', function () {
    return view('performance.index', [
        'impressions' => 1000, 
        'views' => 500,        
        'orders' => 50,        
        'salesPercentage' => 5, 
        'rankChange' => 2      
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

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/forgot', function () {
    return view('auth.forgot');
})->name('forgot');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Add routes for authenticated users
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        if (Auth::check()) {
            return view('dashboard.index'); 
        } else {
            return redirect('/login')->withErrors(['email' => 'You must be logged in to access the dashboard.']);
        }
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('dashboard.profile');
    })->name('profile');

    Route::get('/settings', function () {
        return view('dashboard.settings');
    })->name('settings');

    Route::get('/reports', function () {
        return view('dashboard.reports');
    })->name('reports');

    Route::get('/support', function () {
        return view('dashboard.support');
    })->name('support');

    Route::get('/analytics', function () {
        return view('dashboard.analytics');
    })->name('analytics');

    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});