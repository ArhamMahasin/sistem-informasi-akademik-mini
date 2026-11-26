
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// UI Showcase
Route::get('/', function () {
    return view('showcase.index');
});

// Master Layout Test
Route::get('/layout-test', function () {
    return view('showcase.layout-test');
});

// Components Showcase
Route::get('/components-test', function (Request $request) {

    // Data ilustrasi untuk pengujian pagination
    $items = collect(range(1, 30))
        ->map(fn ($number) => ['id' => $number])
        ->all();

    $page = LengthAwarePaginator::resolveCurrentPage();
    $perPage = 10;

    $paginator = new LengthAwarePaginator(
        array_slice($items, ($page - 1) * $perPage, $perPage),
        count($items),
        $perPage,
        $page,
        [
            'path' => $request->url(),
            'query' => $request->query(),
        ]
    );

    return view('showcase.components', compact('paginator'));
});

// Authentication
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.process');
});

// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Admin Dashboard
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'admin'])
            ->name('dashboard');
    });

// Dosen Dashboard
Route::middleware(['auth', 'role:dosen'])
    ->prefix('dosen')
    ->name('dosen.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'dosen'])
            ->name('dashboard');
    });

// Mahasiswa Dashboard
Route::middleware(['auth', 'role:mahasiswa'])
    ->prefix('mahasiswa')
    ->name('mahasiswa.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'mahasiswa'])
            ->name('dashboard');
    });
