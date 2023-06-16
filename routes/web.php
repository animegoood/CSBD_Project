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
use App\Http\Controllers\GoogleAuthController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\authentications\tworecoveryController;

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


Route::post('/contact/mail', [ContactController::class, 'store'])->name('contact_mail');


Route::get('/works', [WorksectionController::class, 'index'])->name('works');

Route::get('/works', [WorksectionController::class, 'show'])->name('works');


//admin route


Route::middleware(['auth', 'verified'])->group(function () {



    //admin home page

    Route::get('/admin_home', [HomePage::class, 'index'])->name('admin_home');


    // admin profile

    Route::get('/admin_profile', [AdminProfileController::class, 'index'])->name('admin_profile');

    Route::get('/admin_profile', [AdminProfileController::class, 'show'])->name('admin_profile');

    Route::get('/admin_profile_admin', [AdminProfileController::class, 'admin'])->name('admin_profile_admin');


    Route::get('/admin_profile_create', [AdminProfileController::class, 'create'])->name('admin_profile_create');

    Route::post('/admin_profile_store', [AdminProfileController::class, 'store'])->name('admin_profile_store');

    Route::get('/admin_profile_edit', [AdminProfileController::class, 'edit'])->name('admin_profile_edit');

    Route::patch('/admin_profile_update', [AdminProfileController::class, 'update'])->name('admin_profile_update');

    Route::delete('/admin_profile_destroy', [AdminProfileController::class, 'destroy'])->name('admin_profile_destroy');


    // blog section


    Route::get('/blog_section_admin', [BlogSingleController::class, 'admin'])->name('blog_section_admin');

    Route::get('/blog_section_create', [BlogSingleController::class, 'create'])->name('blog_section_create');

    Route::post('/blog_section_store', [BlogSingleController::class, 'store'])->name('blog_section_store');


    Route::get('/blog_section_list', [BlogSingleController::class, 'list'])->name('blog_section_list');

    Route::get('/blog_section_edit/{id}', [BlogSingleController::class, 'edit'])->name('blog_section_edit');

    Route::patch('/blog_section_update/{id}', [BlogSingleController::class, 'update'])->name('blog_section_update');


    Route::delete('/blog_section_destroy/{id}', [BlogSingleController::class, 'destroy'])->name('blog_section_destroy');



    Route::middleware(['role:admin|edit'])->group(function () {



        // Route::post('/admin_profile',[AdminProfileController::class,'index3']);

        //hero section

        Route::get('/herosection_admin', [HerosectionController::class, 'admin'])->name('herosection_admin');

        Route::get('/herosection_create', [HerosectionController::class, 'create'])->name('herosection_create');


        Route::post('/herosection-store', [HerosectionController::class, 'store'])->name('herosection-store');

        Route::get('/herosection_edit', [HerosectionController::class, 'edit'])->name('herosection_edit');

        Route::patch('/herosection_update', [HerosectionController::class, 'update'])->name('herosection_update');

        Route::delete('/herosection_destroy', [HerosectionController::class, 'destroy'])->name('herosection_destroy');

        //about section



        Route::get('/about_section_admin', [AboutController::class, 'admin'])->name('about_section_admin');

        Route::get('/about_section_create', [AboutController::class, 'create'])->name('about_section_create');

        Route::post('/about_section_store', [AboutController::class, 'store'])->name('about_section_store');

        Route::get('/about_section_edit', [AboutController::class, 'edit'])->name('about_section_edit');

        Route::patch('/about_section_update', [AboutController::class, 'update'])->name('about_section_update');

        Route::delete('/about_section_destroy', [AboutController::class, 'destroy'])->name('about_section_destroy');



        // services section


        Route::get('/services_section_admin', [ServicesController::class, 'admin'])->name('services_section_admin');


        Route::get('/services_section_list', [ServicesController::class, 'list'])->name('services_section_list');


        Route::get('/services_section_create', [ServicesController::class, 'create'])->name('services_section_create');

        Route::post('/services_section_store', [ServicesController::class, 'store'])->name('services_section_store');


        Route::get('/services_section_edit/{id}', [ServicesController::class, 'edit'])->name('services_section_edit');



        Route::patch('/services_section_update/{id}', [ServicesController::class, 'update'])->name('services_section_update');



        Route::delete('/services_section_destroy/{id}', [ServicesController::class, 'destroy'])->name('services_section_destroy');





        //work section

        Route::get('/work_section_admin', [WorksectionController::class, 'admin'])->name('work_section_admin');


        Route::get('/work_section_create', [WorksectionController::class, 'create'])->name('work_section_create');


        Route::post('/work_section_store', [WorksectionController::class, 'store'])->name('work_section_store');

        Route::get('/work_section_list', [WorksectionController::class, 'list'])->name('work_section_list');

        Route::get('/work_section_edit/{id}', [WorksectionController::class, 'edit'])->name('work_section_edit');

        Route::patch('/work_section_update/{id}', [WorksectionController::class, 'update'])->name('work_section_update');

        Route::delete('/work_section_destroy/{id}', [WorksectionController::class, 'destroy'])->name('work_section_destroy');
    });
});


//authentication

Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('auth-login-basic');

Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');

//socalite google

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google_auth');

Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);
