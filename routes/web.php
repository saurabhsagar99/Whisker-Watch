<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');


Route::get('/', function () {
    return view('welcome');
});

Route::delete('/reminders/{reminder}/delete-and-return', [ReminderController::class, 'destroyAndReturn'])->name('reminders.destroy-and-return');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::post('reminders/{reminder}/complete', [ReminderController::class, 'complete'])->name('reminders.complete');
    
    // If you want to allow creating reminders for a specific pet directly
    Route::get('reminders/create/{pet_id?}', [ReminderController::class, 'create'])->name('reminders.create');
    Route::resource('pets', PetController::class);
    Route::resource('reminders', ReminderController::class);
    
});

require __DIR__.'/auth.php';

