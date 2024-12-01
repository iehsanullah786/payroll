<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdjustmentTypesController;
use Illuminate\Support\Facades\Route;
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/AdminDashboard', [AdminDashboardController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {

    Route::resource('employees' , EmployeeController::class);
    Route::resource('AdjustmentTypes' , AdjustmentTypesController::class);
    Route::get('admin/profile', action: [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::post('/employees/toggle-status', [EmployeeController::class, 'toggleStatus'])->name('employee.toggleStatus');


});

require __DIR__.'/auth.php';
