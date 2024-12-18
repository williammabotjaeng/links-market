<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AccountController;
use App\Models\Account;

// Welcome Page
Route::get('/', function () {
    if (Auth::check())
    {
        return redirect('/dashboard');
    }
    return view('welcome');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/forgot', function () {
        return view('auth.forgot');
    })->name('forgot');
});

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

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Add routes for authenticated users
Route::middleware(['auth'])->group(function () {

    // Dashboard routes
    Route::get('/dashboard', function () {
        if (Auth::check()) {
            $user = Auth::user(); 
            $projectsCount = 0; 
            $websitesCount = 0; 
            $backlinksCount = 0;
            $account = Account::where('user_id', Auth::id())->first();
            return view('dashboard.index', compact(
                'user', 
                'projectsCount', 
                'websitesCount', 
                'backlinksCount',
                'account'
            )); 
        } else {
            return redirect('/login')->withErrors(['email' => 'You must be logged in to access the dashboard.']);
        }
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('dashboard.profile');
    })->name('profile');

    Route::get('/websites', function () {
        return view('dashboard.publisher.websites');
    })->name('websites');

    Route::get('/projects', function () {
        return view('dashboard.advertiser.projects');
    })->name('projects');

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

    // Auth Routes
    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');

    // Website Routes
    Route::get('/websites/create/step-one', [WebsiteController::class, 'createStepOne'])->name('websites.createStepOne');
    Route::post('/websites/create/step-one', [WebsiteController::class, 'stepOne'])->name('websites.stepOne');
    Route::get('/websites/create/step-two', [WebsiteController::class, 'createStepTwo'])->name('websites.createStepTwo');
    Route::post('/websites', [WebsiteController::class, 'store'])->name('websites.store');
    Route::get('/websites', [WebsiteController::class, 'index'])->name('websites.index');
    Route::get('/websites/{id}/edit/step-one', [WebsiteController::class, 'editStepOne'])->name('websites.stepOneEdit');
    Route::post('/websites/{id}/edit/step-one', [WebsiteController::class, 'stepOneEdit'])->name('websites.stepOneEdit.submit');
    Route::get('/websites/{id}/edit/step-two', [WebsiteController::class, 'editStepTwo'])->name('websites.stepTwoEdit');
    Route::put('/websites/{id}', [WebsiteController::class, 'update'])->name('websites.update');
    Route::delete('/websites/{id}', [WebsiteController::class, 'destroy'])->name('websites.destroy');

    // Tasks Routes
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');

    // Account Routes
    Route::get('/account/balance', [AccountController::class, 'showBalance'])->name('account.balance');
    Route::get('/account/reserved', [AccountController::class, 'showReserved'])->name('account.reserved');
    Route::get('/account/bonus', [AccountController::class, 'showBonus'])->name('account.bonus');
});