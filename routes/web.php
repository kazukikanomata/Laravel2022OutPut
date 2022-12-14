<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Http\Controllers\TopController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [TopController::class, 'index'] )->name('tops.index');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

Route::get('/categories/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');

Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');

Route::delete('/tasks/{task}', [TaskController::class, 'destory'])->name('tasks.destory');

Route::get('/linelogin', [App\Http\Controllers\LineLoginController::class, 'lineLogin'])->name('linelogin');
Route::get('/callback', [App\Http\Controllers\LineLoginController::class,'callback'])->name('callback');