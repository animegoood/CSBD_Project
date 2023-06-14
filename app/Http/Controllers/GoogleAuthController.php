<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GoogleAuthController extends Controller
{

  public function  redirect()
  {
    return Socialite::driver('google')->redirect();
  }

  public function callbackGoogle()
  {




    try {


      $google_user = Socialite::driver('google')->user();
      $user = User::where('google_ID', $google_user->getId())->first();

      if (!$user) {

        $new_user = User::create([

          "name" => $google_user->getName(),
          "email" => $google_user->getEmail(), "google_ID" => $google_user->getId()
        ]);



        Auth::login($new_user);
        return redirect()->intended('admin_home');
      } else {
        Auth::login($user);
        return redirect()->intended('admin_home');
      }
    } catch (\Throwable $th) {
      dd('something went wrong!' . $th->getMessage());
    }
  }
}
