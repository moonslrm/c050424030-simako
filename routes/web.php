<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Simple frontend routes for the new UI (safe examples) using controllers
use App\Http\Controllers\Frontend\MemberController;
use App\Http\Controllers\Frontend\OrganizationController;
use App\Http\Controllers\Frontend\ActivityController;
use App\Http\Controllers\Frontend\AdvisorController;
use App\Http\Controllers\Frontend\UserController;

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/members', [MemberController::class, 'index'])->name('members.index');
    Route::get('/organizations', [OrganizationController::class, 'index'])->name('organizations.index');
    Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
    Route::get('/advisors', [AdvisorController::class, 'index'])->name('advisors.index');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});
