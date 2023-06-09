<?php

namespace App\Http\Controllers;

use App\Models\worksection;
use App\Http\Requests\StoreworksectionRequest;
use App\Http\Requests\UpdateworksectionRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


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

  public function admin()
  {
    return view('content.pages.work_section_admin');

  }
  public function create()
  {
    return view('content.pages.admin_work.work_section_create');
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








    //background image

    //background image file name
    $photography_work_name = time() . Str::upper(Str::random(16)) . '.' . $request->photography->extension();
    // move the background image
    $request->photography->move(public_path('photography_works'), $photography_work_name);



    $illustrator_work_name = time()  .  Str::upper(Str::random(16)) . '.' . $request->illustrator->extension();

    $request->illustrator->move(public_path('illustrator_works'), $illustrator_work_name);






    $graphicDesign_work_name = time()  .  Str::upper(Str::random(16)) . '.' . $request->graphicDesign->extension();

    $request->graphicDesign->move(public_path('graphicDesign_works'), $graphicDesign_work_name);














    $data = [




      'photography_name' => $request->photography_name,
      'illustrator_name' => $request->illustrator_name,
      'graphicDesign_name' => $request->graphicDesign_name,



      'photography' => $photography_work_name,
      'illustrator' => $illustrator_work_name,
      'graphicDesign' => $graphicDesign_work_name,




    ];

    worksection::create($data);

    return redirect()->back()->with('success', 'work section data save successfully ');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\worksection  $worksection
   * @return \Illuminate\Http\Response
   */
  public function show(worksection $worksection)
  {

    $work_details = DB::table('worksections')->get()->all();

    return view('webContent.works', compact('work_details'));
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

    // if (Auth::check()) {
      if (worksection::first()->exists()) {


        // remove file from storage
        $table_data = worksection::first();

        $image_path = $table_data->photography;
        $image_path2 = $table_data->illustrator;
        $image_path3 = $table_data->graphicDesign;

        if (File::exists(public_path('photography_works/') . $image_path)) {
          File::delete(public_path('photography_works/') . $image_path);

          if (File::exists(public_path('illustrator_works/') . $image_path2)) {
            File::delete(public_path('illustrator_works/') . $image_path2);

            if (File::exists(public_path('graphicDesign_works/') . $image_path3)) {
              File::delete(public_path('graphicDesign_works/') . $image_path3);
            }
          }
        } else {
          return redirect()->back()->with('error', 'Images are not found associated with this table_data!');
        }
        worksection::first()->delete();

        return redirect()->back()->with('success', 'Table data deleted successfully!');
      } else {
        return redirect()->back()->with('error', 'Table data does not exist! So can not delete!');
      }
    // } else {
    //   return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    // }
  }

}
