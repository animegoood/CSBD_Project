<?php

namespace App\Http\Controllers;

use App\Http\Requests\herosectionRequest;
use App\Models\herosection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Termwind\Components\Dd;

class HerosectionController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

    return view('content.pages.herosection');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \App\Http\Requests\herosectionRequest $request
   * @return \Illuminate\Http\Response
   */
  public function store(herosectionRequest $request)
  {

    $request->validated();

    //background image

    //background image file name
    $file_name = time() . Str::upper(Str::random(16)) . '.' . $request->Background_img->extension();
    // move the background image
    $request->Background_img->move(public_path('background_image'), $file_name);

    //download cv

    //download cv file name
    // $file_name2 = time() . Str::upper(Str::random(16)) . '.' . $request->downloadCV->extension();
    // move the download cv
    // $request->Background_img->move(public_path('downloadCV'), $file_name2);





    $data = [
      "name_Symbol" => $request->name_Symbol,
      "Yourname" => $request->Yourname,
      "profession_1" => $request->profession_1,
      "profession_2" => $request->profession_2,
      "social_1" => $request->social_1,
      "social_2" => $request->social_2,

      "social_3" => $request->social_3,
      "social_4" => $request->social_4,
      "social_5" => $request->social_5,
      // "downloadCV" => $file_name2,
      "Background_img" => $file_name,
    ];
    herosection::create($data);

    return redirect()->back()->with('session', 'Herosection data save successfully!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\herosection  $herosection
   * @return \Illuminate\Http\Response
   */
  public function show(herosection $herosection)
  {
     $herosection_details = herosection::first();

    return view('WebContent.home', compact('herosection_details'));
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\herosection  $herosection
   * @return \Illuminate\Http\Response
   */
  public function edit(herosection $herosection)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\herosection  $herosection
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, herosection $herosection)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\herosection  $herosection
   * @return \Illuminate\Http\Response
   */
  public function destroy(herosection $herosection)
  {
    //
  }
}
