<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class WebServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    Fortify::registerView(function () {
      $pageConfigs = ['myLayout' => 'blank'];
      return view('content.authentications.auth-register-basic', ['pageConfigs' => $pageConfigs]);
    });

    Fortify::loginView(function () {
      $pageConfigs = ['myLayout' => 'blank'];
      return view('content.authentications.auth-login-basic', ['pageConfigs' => $pageConfigs]);
    });


    Fortify::verifyEmailView(function () {
      $pageConfigs = ['myLayout' => 'blank'];
      return view('content.authentications.auth-verify-email-basic', ['pageConfigs' => $pageConfigs]);
  });
  }
}
