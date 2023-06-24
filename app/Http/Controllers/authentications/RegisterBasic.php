<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterBasic extends Controller
{



  // protected $redirectTo = '/admin_home';
  // protected function redirectTo()
  // {
  //   if (auth()->user()->role == '1') {
  //     return '/admin_home';
  //   }
  //   return '/login';
  // }


  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.authentications.auth-register-basic', ['pageConfigs' => $pageConfigs]);
  }
}
