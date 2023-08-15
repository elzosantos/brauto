<?php

use App\Http\Controllers\Admin\ReplySupportController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ConsultancyController;
use App\Http\Controllers\FipeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::delete('/supports/{id}/replies/{reply}', [ReplySupportController::class, 'destroy'])->name('replies.destroy');
    Route::post('/supports/{id}/replies', [ReplySupportController::class, 'store'])->name('replies.store');
    Route::get('/supports/{id}/replies', [ReplySupportController::class, 'index'])->name('replies.index');

    Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');
    Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');
    Route::get('/supports/edit/{id}', [SupportController::class, 'edit'])->name('supports.edit');
    Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
    Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
    Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

    //Users
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    //Consultancy 
    Route::post('/consultancy', [ConsultancyController::class, 'store'])->name('consultancies.store');
    Route::get('/consultancy/create/step/{id}', [ConsultancyController::class, 'create'])->name('consultancies.create');
    Route::get('/consultancy/{id}', [ConsultancyController::class, 'show'])->name('consultancies.show');
    Route::get('/consultancy', [ConsultancyController::class, 'index'])->name('consultancies.index');

    // Vehicles
    Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicles.store');
    Route::get('/vehicles/create', [VehicleController::class, 'create'])->name('vehicles.create');
    Route::delete('/vehicles/{id}', [VehicleController::class, 'destroy'])->name('vehicles.destroy');
    Route::get('/vehicles/{id}', [VehicleController::class, 'show'])->name('vehicles.show');
    Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');

    Route::get('/fipe', [FipeController::class, 'index'])->name('fipe.index');
    Route::get('/fipe/brands', [FipeController::class, 'brands'])->name('fipe.brands');
    Route::get('/fipe/vehicles', [FipeController::class, 'vehicles'])->name('fipe.vehicles');
 

   // Route::get('/fipe', [FipeController::class, 'index'])->name('fipe.index');

       //Consultancy 
       Route::post('/maintenance', [MaintenanceController::class, 'store'])->name('maintenances.store');
       Route::get('/maintenance/create/', [MaintenanceController::class, 'create'])->name('maintenances.create');
       Route::get('/maintenance/{id}', [MaintenanceController::class, 'show'])->name('maintenances.show');
       Route::get('/maintenance', [MaintenanceController::class, 'index'])->name('maintenances.index');
});

require __DIR__ . '/auth.php';
