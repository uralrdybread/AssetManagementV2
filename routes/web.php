<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAdmin;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MaintenanceController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', \App\Http\Middleware\RedirectIfNotAdmin::class])->group(function () {
    // Routes that need to be protected
    Route::resource('assets', AssetController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('reports', ReportsController::class)->only([
    'index'
    ]);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
     Route::delete('/maintenance/{maintenance}', [MaintenanceController::class, 'destroy'])
        ->name('maintenances.destroy');

        // Regular users can access maintenance submission form
    Route::post('/submit-maintenance', [MaintenanceController::class, 'store'])
        ->name('maintenances.store')
        ->middleware(RedirectIfAdmin::class);

    // Admin users can view list of submitted data
    Route::get('/maintenance', [MaintenanceController::class, 'index'])
        ->name('maintenance.index')
        ->middleware(RedirectIfAdmin::class);
});



require __DIR__.'/auth.php';
