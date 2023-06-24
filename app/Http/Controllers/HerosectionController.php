<?php

namespace App\Http\Controllers;

use App\Models\herosection;
use App\Http\Requests\StoreherosectionRequest;
use App\Http\Requests\UpdateherosectionRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Permission;




class HerosectionController extends Controller
{

  use HasRoles;
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    $pageConfigs = ['myLayout' => 'blank'];

    return view('webContent.webhome', ['pageConfigs' => $pageConfigs]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {



    if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }

    return view('content.pages.admin_home.herosection');
  }

  public function admin()

  {

    if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }

    return view('content.pages.hero_section_admin');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\StoreherosectionRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreherosectionRequest $request)
  {

    if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }

    $request->validated();

    //background image

    //background image file name
    $file_name = time() . Str::upper(Str::random(16)) . '.' . $request->Background_img->extension();
    // move the background image
    $request->Background_img->move(public_path('background_image'), $file_name);

    //authorbackground image

    //authorbackground image file name
    $author_file_name = time() . Str::upper(Str::random(16)) . '.' . $request->Author_background_image->extension();
    // move the authorbackground image
    $request->Author_background_image->move(public_path('Author_background_image'), $author_file_name);




    //collect data from   adminpage

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


      "Background_img" => $file_name,

      "Author_background_image" => $author_file_name,

    ];



    herosection::create($data);



    return redirect()->route('herosection_admin')->with('success', 'Hero section data  save successfully!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\herosection  $herosection
   * @return \Illuminate\Http\Response
   */
  public function show(herosection $herosection)
  {

    //create role & permission

    // $user =User::where('role', 1)->first();
    // $user->assignRole('admin');
    // $user->givePermissionTo('edit');


    // Give role to permission

    // $role = Role::where('name', 'admin')->first();

    // $role->givePermissionTo('edit');


    //role & permission end


    $herosection_details = herosection::first();

    if (File::exists(public_path('background_image/') . $herosection_details->background_img)) {
      $bgimg_path =  asset('background_image/' . $herosection_details->Background_img);
    };


    if (File::exists(public_path('Author_background_image/') . $herosection_details->Author_background_image)) {
      $authorimg_path =  asset('Author_background_image/' . $herosection_details->Author_background_image);
    };


    return view('WebContent.webhome', compact('herosection_details', 'bgimg_path', 'authorimg_path'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\herosection  $herosection
   * @return \Illuminate\Http\Response
   */
  public function edit(herosection $herosection)
  {
    if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }


    $herosection_update = herosection::first();
    return view('content.pages.admin_home.admin_home_edit', compact('herosection_update'));


  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\UpdateherosectionRequest  $request
   * @param  \App\Models\herosection  $herosection
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateherosectionRequest $request, herosection $herosection)
  {

    if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }

    $request->validated();


    //for old image delete

    $get_data = herosection::first();
    $image_name = $get_data->Background_img;
    $image2_name = $get_data->Author_background_image;



    if ($request->hasFile('Background_img')) {

      if (File::exists(public_path('background_image/') . $image_name)) {


        File::delete(public_path('background_image/') . $image_name);
      }

      //background image

      //background image file name


      $file_name = time() . Str::upper(Str::random(16)) . '.' . $request->Background_img->extension();
      // move the background image
      $request->Background_img->move(public_path('background_image'), $file_name);
    } else {
      $file_name = $get_data->Background_img;
    }



    if ($request->hasFile('Author_background_image')) {

      if (File::exists(public_path('Author_background_image/') . $image2_name)) {
        File::delete(public_path('Author_background_image/') . $image2_name);
      }




      //authorbackground image

      //authorbackground image file name
      $author_file_name = time() . Str::upper(Str::random(16)) . '.' . $request->Author_background_image->extension();
      // move the authorbackground image
      $request->Author_background_image->move(public_path('Author_background_image'), $author_file_name);
    } else {
      $author_file_name = $get_data->Author_background_image;
    }





    //collect data from   adminpage

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

      // "" => $file_name2,

      "Background_img" => $file_name,

      "Author_background_image" => $author_file_name,

    ];
    herosection::first()->update($data);

    return redirect()->route('herosection_admin')->with('success', 'Hero section data  upsate successfully!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\herosection  $herosection
   * @return \Illuminate\Http\Response
   */
  public function destroy(herosection $herosection)
  {

    // delete the applicant
    if (Auth::check()) {

      if (herosection::first()->exists()) {



        // remove file from storage
        $table_data = herosection::first();

        $image_path = $table_data->Background_img;
        $image_path2 = $table_data->Author_background_image;

        if (File::exists(public_path('background_image/') . $image_path)) {
          File::delete(public_path('background_image/') . $image_path);

          if (File::exists(public_path('Author_background_image/') . $image_path2)) {
            File::delete(public_path('Author_background_image/') . $image_path2);
          }
        } else {
          return redirect()->route('herosection_admin')->with('error', 'Images are not found associated with this table_data!');
        }

        herosection::first()->delete();

        return redirect()->route('herosection_admin')->with('success', 'Table data deleted successfully!');
      } else {
        return redirect()->route('herosection_admin')->with('error', 'Table data does not exist! So can not delete!');
      }
    } else {
      return redirect()->route('login')->with('error', 'You are not authorized to delete this appliction!');
    }
  }
}
