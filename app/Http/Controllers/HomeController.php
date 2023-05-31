<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{public function index(){

    // $pageConfigs = ['myLayout' => 'blank'];

    // return view('webContent.home',['pageConfigs' => $pageConfigs] );
  }


  public function about(){

    // return view('webContent.about');
  }


  public function blog_single(){

    // return view('webContent.blog_single');
  }


  // public function blog(){

  //   return view('webContent.blog');
  // }


  public function contact(){

    return view('webContent.contact');
  }


  // public function service(){

  //   return view('webContent.services');
  // }


  public function works(){

    return view('webContent.works');
  }


}

