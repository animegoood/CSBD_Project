<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class HomePage extends Controller
{
  public function index()


  { //create role & permission

    // $user = User::where('role', 1)->first();
    // $user->assignRole('admin');
    // $user->givePermissionTo('edit');


    // Give role to permission

    // $role = Role::where('name', 'admin')->first();

    // $role->givePermissionTo('edit');

    // check authintication


    if (!Auth::check()  ){
      return redirect()->route('login');
    }


    return view('content.pages.pages-home');
  }
}
