<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController, HomeController, MemberController, BookController, ReportController};

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/data/member', [MemberController::class, 'index']);
Route::get('/data/member/create', [MemberController::class, 'create']);
Route::post('/data/member/store', [MemberController::class, 'store']);
Route::get('/data/member/edit/{member:id}', [MemberController::class, 'edit']);
Route::patch('/data/member/update/{member:id}', [MemberController::class, 'update']);
Route::delete('/data/member/delete/{member:id}', [MemberController::class, 'destroy']);

Route::get('/data/book', [BookController::class, 'index']);
Route::get('/data/book/create', [BookController::class, 'create']);
Route::post('/data/book/store', [BookController::class, 'store']);
Route::get('/data/book/edit/{book:id}', [BookController::class, 'edit']);
Route::patch('/data/book/update/{book:id}', [BookController::class, 'update']);
Route::delete('/data/book/delete/{book:id}', [BookController::class, 'destroy']);

Route::get('/report', [ReportController::class, 'index']);