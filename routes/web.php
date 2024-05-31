<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DasboardController;

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
/*dashboard*/
Route::get('/Dashboard', function(){
    return view('layouts.public.dashboard');
})->name('dashboard');

/*profile*/
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile', [ProfileController::class, 'create'])->name('profile.create');
Route::resource('products', ProductController::class);



/*home*/
Route::get('/', [HomesController::class, 'index'])->name('home');
Route::get('/home', [HomesController::class, 'index'])->name('home');

/*categories*/

Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::post('/category', [CategoryController::class, 'create'])->name('profile.create');


/*login*/
Route::get('/login', function(){
    return view('layouts.public.login');
})->name('login');








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
