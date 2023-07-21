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
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\authentications\tworecoveryController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
