<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TalentApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'contact'])->name('contact.submit');

// Talent Club Application Workflow Routes
Route::prefix('rejoindre')->name('talent.application.')->group(function () {
    Route::get('/', [TalentApplicationController::class, 'create'])->name('create');
    Route::get('/confirmation/{reference}', [TalentApplicationController::class, 'confirmation'])->name('confirmation');
    Route::get('/completer/{reference}', [TalentApplicationController::class, 'complete'])->name('complete');
    Route::post('/completer/{reference}', [TalentApplicationController::class, 'submitCompletion'])->name('submit-completion');
});
