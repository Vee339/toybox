<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\ToysController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/console/dashboard', [ConsoleController::class, 'dashboard'])->middleware('auth');
Route::get('/console/login', [ConsoleController::class,'loginForm'])->middleware('guest')->name('login');
Route::post('/console/login', [ConsoleController::class, 'login'])->middleware('guest');
Route::get('/console/logout',[ConsoleController::class, 'logout'])->middleware('auth');

Route::get('/console/children/list', [ChildrenController::class, 'list'])->middleware('auth');
Route::get('/console/children/delete/{child:id}', [ChildrenController::class, 'delete'])->where('child', '[0-9]+')->middleware('auth');
Route::get('/console/children/add', [ChildrenController::class, 'addForm'])->middleware('auth');
Route::post('/console/children/add', [ChildrenController::class, 'add'])->middleware('auth');
Route::get('/console/children/edit/{child:id}', [ChildrenController::class, 'editForm'])->where('child', '[0-9]+')->middleware('auth');
Route::post('/console/children/edit/{child:id}',[ChildrenController::class, 'edit'])->where('child', '[0-9]+')->middleware('auth');

Route::get('/console/toys/list', [ToysController::class, 'list'])->middleware('auth');
Route::get('/console/toys/delete/{toy:id}', [ToysController::class, 'delete'])->where('toy', '[0-9]+')->middleware('auth');