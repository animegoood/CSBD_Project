<?php

namespace App\Http\Controllers;

use App\Models\worksection;
use App\Http\Requests\StoreworksectionRequest;
use App\Http\Requests\UpdateworksectionRequest;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\Return_;

class WorksectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('webContent.works');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.pages.work_section_admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreworksectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreworksectionRequest $request)
    {


       $request->validated();









       $photography_work_name = time()  .  Str::upper(Str::random(16)) .'.'. $request->photography->extension();

       $request->photography->move(public_path('photography_works',$photography_work_name));



       $illustrator_work_name = time()  .  Str::upper(Str::random(16)) .'.'. $request->illustrator->extension();

       $request->illustrator->move(public_path('illustrator_works',$illustrator_work_name));






       $graphicDesign_work_name = time()  .  Str::upper(Str::random(16)) .'.'. $request->graphicDesign->extension();

       $request->graphicDesign->move(public_path('graphicDesign_works',$graphicDesign_work_name));














      $data=[






        'photography' =>$photography_work_name ,
        'illustrator'=> $illustrator_work_name,
        'graphicDesign'=> $graphicDesign_work_name,




      ];

      worksection::create($data);

      return redirect()->back()->with('session','work section data save successfully ');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\worksection  $worksection
     * @return \Illuminate\Http\Response
     */
    public function show(worksection $worksection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\worksection  $worksection
     * @return \Illuminate\Http\Response
     */
    public function edit(worksection $worksection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateworksectionRequest  $request
     * @param  \App\Models\worksection  $worksection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateworksectionRequest $request, worksection $worksection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\worksection  $worksection
     * @return \Illuminate\Http\Response
     */
    public function destroy(worksection $worksection)
    {
        //
    }
}
