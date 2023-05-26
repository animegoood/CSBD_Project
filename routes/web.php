<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\HerosectionController;
use App\Http\Controllers\pages\HomePage;
use Illuminate\Support\Facades\Auth;

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


// web Page Route
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HerosectionController::class, 'show'])->name('home');



Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/blog_single', [HomeController::class, 'blog_single'])->name('blog_single');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/services', [HomeController::class, 'service'])->name('services');

Route::get('/works', [HomeController::class, 'works'])->name('works');




//admin route

Route::get('/', [HomePage::class,'index'])->name('pages-home');

Route::get('/herosection',[HerosectionController::class, 'create'])->name('herosection');

Route::post('/herosection-store',[HerosectionController::class, 'store'])->name('herosection-store');

Route::get('/auth/login-basic', [LoginBasic::class,'index'])->name('auth-login-basic');
Route::get('/auth/register-basic', [RegisterBasic::class,'index'])->name('auth-register-basic');

