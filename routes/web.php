<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\BlogSingleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HerosectionController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\WorksectionController;
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
Route::get('/home', [HerosectionController::class, 'index'])->name('home');

Route::get('/home', [HerosectionController::class, 'show'])->name('home');



Route::get('/about', [AboutController::class, 'index'])->name('about');


Route::get('/about', [AboutController::class, 'show'])->name('about');





Route::get('/services', [ServicesController::class, 'index'])->name('services');

Route::get('/services', [ServicesController::class, 'show'])->name('services');






Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::get('/works', [WorksectionController::class, 'index'])->name('works');




//admin route

Route::get('/', [HomePage::class,'index'])->name('pages-home');

Route::get('/herosection_admin',[HerosectionController::class, 'create'])->name('herosection_admin');

Route::post('/herosection-store',[HerosectionController::class, 'store'])->name('herosection-store');

Route::get('/about_section_admin',[AboutController::class, 'create'])->name('about_section_admin');

Route::post('/about_section_store',[AboutController::class, 'store'])->name('about_section_store');

Route::get('/services_section_admin', [ServicesController::class, 'create'])->name('services_section_admin');

Route::post('/services_section_store',[ServicesController::class, 'store'])->name('services_section_store');


Route::post('/contact_section_store',[ContactController::class, 'store'])->name('contact_section_store');


Route::get('/work_section_admin',[WorksectionController::class, 'create'])->name('work_section_admin');


Route::post('/work_section_store',[WorksectionController::class, 'store'])->name('work_section_store');





Route::get('/auth/login-basic', [LoginBasic::class,'index'])->name('auth-login-basic');

Route::get('/auth/register-basic', [RegisterBasic::class,'index'])->name('auth-register-basic');

