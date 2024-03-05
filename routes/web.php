<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\view_controller;
use App\Http\Controllers\AuthController;

Route::get('/', [view_controller::class, 'welcome'])->name('home');
Route::get('/your-route', [view_controller::class, 'index'])->name('route');
Route::post('/your-route', [view_controller::class, 'store']);

Route::get('/table', [view_controller::class, 'table'])->name('table');
Route::get('/members', [view_controller::class, 'search'])->name('members.index');
Route::get('/members/search', [view_controller::class, 'searchbox'])->name('members.search');
Route::delete('/members/{id}', [view_controller::class, 'delete'])->name('members.delete');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('admin');
Route::post('/register', [AuthController::class, 'register']);
