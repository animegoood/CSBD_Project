<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryControllr extends Controller
{
  public function categori_list()
  {

    return view('webContent.categoris_list');

  }
}
