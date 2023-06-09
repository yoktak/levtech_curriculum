<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::post('/posts',  [PostController::class, 'store'])->name('store');
    Route::get('/posts/create',  [PostController::class, 'create'])->name('create');
    Route::get('/posts/{post}',  [PostController::class, 'show'])->name('show');
    Route::put('/posts/{post}',  [PostController::class, 'update'])->name('update');
    Route::delete('/posts/{post}',  [PostController::class, 'delete'])->name('delete');
    Route::get('/posts/{post}/edit',  [PostController::class, 'edit'])->name('edit');
});

require __DIR__.'/auth.php';
