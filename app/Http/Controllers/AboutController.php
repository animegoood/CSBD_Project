<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Http\Requests\StoreaboutRequest;
use App\Http\Requests\UpdateaboutRequest;

class AboutController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('webContent.about');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('content.pages.aboutSection');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\StoreaboutRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreaboutRequest $request)
  {
    $request->validated();

    $data = [

      'intro'=> $request->intro,

      'aboutinfo' => $request->aboutinfo,
      'Yourname' => $request->Yourname,
      'Youremail' => $request->Youremail,
      'phone_number' => $request->phone_number,
      'location' => $request->location,
      'freelancer'=>$request->freelancer,
      'experience' => $request->experience,
      'social_1' => $request->social_1,
      'social_2' => $request->social_2,
      'social_3' => $request->social_3,
      'downloadCV' => $request->downloadCV,

      'work_1' => $request->work_1,
      'work_2' => $request->work_2,
      'work_3' => $request->work_3,

      'work_year_1' => $request->work_year_1,
      'work_year_2' => $request->work_year_2,
      'work_year_3' => $request->work_year_3,

      'work_description_1' => $request->work_description_1,
      'work_description_2' => $request->work_description_2,
      'work_description_3' => $request->work_description_3,

      'eduction_1' => $request->eduction_1,
      'eduction_2' => $request->eduction_2,
      'eduction_3' => $request->eduction_3,

      'education_year_1' => $request->education_year_1,
      'education_year_2' => $request->education_year_2,
      'education_year_3' => $request->education_year_3,

      'education_description_1' => $request->education_description_1,
      'education_description_2' => $request->education_description_2,
      'education_description_3' => $request->education_description_3,

      'photoshop_skill_percent' => $request->photoshop_skill_percent,
      'illustrator_skill_percent' => $request->illustrator_skill_percent,
      'figma_skill_percent' => $request->figma_skill_percent,
      'adobeXD_skill_percent' => $request->adobeXD_skill_percent,
      'react_skill_percent' => $request->react_skill_percent,
      'javascript_skill_percent' => $request->javascript_skill_percent,
      'css_skill_percent' => $request->css_skill_percent,

      'jquery_skill_percent' => $request->jquery_skill_percent,



    ];

    about::create($data);

    return redirect()->back()->with('session', 'about section data save sucessfully');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\about  $about
   * @return \Illuminate\Http\Response
   */
  public function show(about $about)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\about  $about
   * @return \Illuminate\Http\Response
   */
  public function edit(about $about)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\UpdateaboutRequest  $request
   * @param  \App\Models\about  $about
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateaboutRequest $request, about $about)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\about  $about
   * @return \Illuminate\Http\Response
   */
  public function destroy(about $about)
  {
    //
  }
}
