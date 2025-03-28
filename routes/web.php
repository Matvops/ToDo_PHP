<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\isAutenticated;
use App\Http\Middleware\isNotAutenticated;
use Illuminate\Support\Facades\Route;

Route::middleware([isAutenticated::class])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/home', [MainController::class, 'home'])->name('home');

    Route::get('/updateTask/{task_id}', [MainController::class, 'updateTask'])->name('update.task');
    Route::post('/updateTaskSubmit', [MainController::class, 'updateTaskSubmit'])->name('update.task.submit');

    Route::get('/createTask/{week_id}', [MainController::class, 'createTask'])->name('add.task');
    Route::post('/createTaskSubmit', [MainController::class, 'createTaskSubmit'])->name('add.task.submit');

    Route::get('/delete/{task_id}', [MainController::class, 'deleteSubmit'])->name('delete.task');

    Route::get('/financas', [MainController::class, 'getMonthlySalary'])->name('financas');
});

Route::middleware([isNotAutenticated::class])->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/authLogin', [AuthController::class, 'authLogin'])->name('auth');    
});