<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; 
use App\Http\Controllers\ImageController;
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

Route::get('/', [PostController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/post', [PostController::class, 'post'])->middleware('auth');

Route::get('/resipe', function(){
    return view('posts/resipe');
});

Route::post('/posts',[PostController::class, 'store']);
Route::post('/upload',[ImageController::class, 'upload']);
Route::get('/posts/{post}',[PostController::class,'show']);
Route::get('link/',[PostController::class,'view']);


//後で消す
Route::get('/navber',[PostController::class,'navber']);
Route::get('/ex', function(){
    return view('posts/ex');
});
