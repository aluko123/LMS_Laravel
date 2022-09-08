<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('comments', App\Http\Controllers\CommentController::class);
Route::resource('courses', App\Http\Controllers\CourseController::class);
Route::resource('course-users', App\Http\Controllers\CourseUserController::class);
Route::resource('items', App\Http\Controllers\ItemController::class);
Route::resource('payments', App\Http\Controllers\PaymentController::class);
Route::resource('upers', App\Http\Controllers\UserController::class);
Route::resource('views', App\Http\Controllers\ViewController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
