<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProfileController;

use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\BlogSingleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HerosectionController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\WorksectionController;
use GuzzleHttp\Middleware;
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

Route::get('/', [HerosectionController::class, 'index'])->name('home');

Route::get('/', [HerosectionController::class, 'show'])->name('home');



Route::get('/about', [AboutController::class, 'index'])->name('about');


Route::get('/about', [AboutController::class, 'show'])->name('about');



Route::get('/blog', [BlogSingleController::class, 'index'])->name('blog');


Route::get('/blog_single/{id}', [BlogSingleController::class, 'index_single'])->name('blog_single');

Route::get('/blog_single/{id}', [BlogSingleController::class, 'show'])->name('blog_single');



Route::get('/services', [ServicesController::class, 'index'])->name('services');

Route::get('/services', [ServicesController::class, 'show'])->name('services');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::get('/works', [WorksectionController::class, 'index'])->name('works');

Route::get('/works', [WorksectionController::class, 'show'])->name('works');


//admin route


// Route::group(['middleware' => ['auth','verify'], function () {
//admin home page

Route::get('/admin_home', [HomePage::class,'index'])->name('admin_home');


// admin profile

 Route::get('/admin_profile',[AdminProfileController::class, 'index'])->name('admin_profile');


Route::get('/admin_profile_admin',[AdminProfileController::class,'admin'])->name('admin_profile_admin');


// Route::get('/admin_profile',[AdminProfileController::class,'index3']);
// Route::post('/admin_profile',[AdminProfileController::class,'index3']);

//hero section

Route::get('/herosection_admin',[HerosectionController::class, 'admin'])->name('herosection_admin');

Route::get('/herosection_create',[HerosectionController::class, 'create'])->name('herosection_create');


Route::post('/herosection-store',[HerosectionController::class, 'store'])->name('herosection-store');

Route::get('/herosection_edit',[HerosectionController::class, 'edit'])->name('herosection_edit');

Route::patch('/herosection_update',[HerosectionController::class, 'update'])->name('herosection_update');

Route::delete('/herosection_destroy',[HerosectionController::class, 'destroy'])->name('herosection_destroy');

//about section



Route::get('/about_section_admin',[AboutController::class, 'admin'])->name('about_section_admin');

Route::get('/about_section_create',[AboutController::class, 'create'])->name('about_section_create');

Route::post('/about_section_store',[AboutController::class, 'store'])->name('about_section_store');

Route::get('/about_section_edit',[AboutController::class, 'edit'])->name('about_section_edit');

Route::patch('/about_section_update',[AboutController::class, 'update'])->name('about_section_update');

Route::delete('/about_section_destroy',[AboutController::class, 'destroy'])->name('about_section_destroy');



// services section


Route::get('/services_section_admin', [ServicesController::class, 'admin'])->name('services_section_admin');



Route::get('/services_section_create', [ServicesController::class, 'create'])->name('services_section_create');

Route::post('/services_section_store',[ServicesController::class, 'store'])->name('services_section_store');




Route::get('/services_section_edit',[ServicesController::class, 'edit'])->name('services_section_edit');



Route::patch('/services_section_update',[ServicesController::class, 'update'])->name('services_section_update');



Route::delete('/services_section_destroy',[ServicesController::class, 'destroy'])->name('services_section_destroy');


// blog section

Route::get('/blog_section_admin',[BlogSingleController::class, 'create'])->name('blog_section_admin');


Route::post('/blog_section_store',[BlogSingleController::class, 'store'])->name('blog_section_store');

// contact section

Route::post('/contact_section_store',[ContactController::class, 'store'])->name('contact_section_store');


//work section

Route::get('/work_section_admin',[WorksectionController::class, 'admin'])->name('work_section_admin');

Route::get('/work_section_create',[WorksectionController::class, 'create'])->name('work_section_create');


Route::post('/work_section_store',[WorksectionController::class, 'store'])->name('work_section_store');

Route::delete('/work_section_destroy',[WorksectionController::class, 'destroy'])->name('work_section_destroy');


// });


//authentication

Route::get('/auth/login-basic', [LoginBasic::class,'index'])->name('auth-login-basic');

Route::get('/auth/register-basic', [RegisterBasic::class,'index'])->name('auth-register-basic');

