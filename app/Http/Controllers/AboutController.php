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
      
      $data=[


        'aboutinfo' => $request->aboutinfo,
        'Yourname' => $request->Yourname,
        'Youremail' => $request->Youremail,
        'phone_number' => $request->phone_number,
        'location' => $request->location,
        'experience' => $request->experience,
        'social_1' => $request->social_1,
        'social_2' => $request->social_2,
        'social_3' => $request->social_3,
        'downloadCV' => $request->downloadCV,



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
