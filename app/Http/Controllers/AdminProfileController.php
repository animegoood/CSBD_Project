<?php

namespace App\Http\Controllers;

use App\Models\admin_profile;
use App\Http\Requests\Storeadmin_profileRequest;
use App\Http\Requests\Updateadmin_profileRequest;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AdminProfileController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

   //subscriber list


  public function Slist()
  {

    $subscriber_lists = DB::table('users')->paginate(10);

    return view('content.pages.subscriber.suscriber_list',compact('subscriber_lists'));




  }





   //profile


  public function index()
  {
    if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }

    return view('content.admin_profile.admin_profile');
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function admin()
  {
    if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }

    return view('content.admin_profile.profile_admin');

  }

  public function create()
  {
    if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }
    return view('content.admin_profile.profile_admin_create');

  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\Storeadmin_profileRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Storeadmin_profileRequest $request)
  {

    if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }

    $request->validated();



    //admin profile image

    //admin profile image file name

    $admin_img_name = time() . Str::upper(Str::random(16)) . '.' . $request->admin_image->extension();

    // move the admin profile image
    $request->admin_image->move(public_path('admin_profile_image'), $admin_img_name);

    //cover profile image

    //cover profile image file name
    $cover_image_name = time() . Str::upper(Str::random(16)) . '.' . $request->cover_image->extension();
    // move the cover profile image
    $request->cover_image->move(public_path('cover_profile_image'), $cover_image_name);






    $data = [


      'admin_name' =>$request->admin_name,
      'profession'=>$request->profession,
      'city'=>$request->city,

      'profession_joinend'=>$request->profession_joinend,
      'role'=>$request->role,
      'country'=>$request->country,
      'language'=>$request->language,


      'contact'=>$request->contact,
      'skype'=>$request->skype,
      'email'=>$request->email,
      'admin_image'=>$admin_img_name,
      'cover_image'=>$cover_image_name,



    ];

    admin_profile::create($data);


    return redirect()->route('admin_profile_admin')->with('success','Admin Profile data save successfully');


  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\admin_profile  $admin_profile
   * @return \Illuminate\Http\Response
   */
  public function show(admin_profile $admin_profile)
  {

    if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }

     $admin_profile_details = DB::table('admin_profiles')->first();


     return view('content.admin_profile.admin_profile', compact('admin_profile_details'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\admin_profile  $admin_profile
   * @return \Illuminate\Http\Response
   */
  public function edit(admin_profile $admin_profile)
  {
    if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }
    $admin_profile_update = admin_profile::first();
    return view('content.admin_profile.profile_admin_edit', compact('admin_profile_update'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\Updateadmin_profileRequest  $request
   * @param  \App\Models\admin_profile  $admin_profile
   * @return \Illuminate\Http\Response
   */
  public function update(Updateadmin_profileRequest $request, admin_profile $admin_profile)
  {


    if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }

    $request->validated();


    //for old image delete

    $get_data = admin_profile::first();
    $image_name = $get_data->admin_image;
    $image2_name = $get_data->cover_image;



    if ($request->hasFile('admin_image')) {

      if (File::exists(public_path('admin_profile_image/') . $image_name)) {


        File::delete(public_path('admin_profile_image/') . $image_name);
      }

      ///admin profile image

    //admin profile image file name

    $admin_img_name = time() . Str::upper(Str::random(16)) . '.' . $request->admin_image->extension();

    // move the admin profile image
    $request->admin_image->move(public_path('admin_profile_image'), $admin_img_name);

    } else {
      $admin_img_name = $get_data->admin_image;
    }



    if ($request->hasFile('cover_image')) {

      if (File::exists(public_path('cover_profile_image/') . $image2_name)) {
        File::delete(public_path('cover_profile_image/') . $image2_name);
      }




      //cover profile image

    //cover profile image file name
    $cover_image_name = time() . Str::upper(Str::random(16)) . '.' . $request->cover_image->extension();
    // move the cover profile image
    $request->cover_image->move(public_path('cover_profile_image'), $cover_image_name);

    } else {
      $cover_image_name = $get_data->cover_image;
    }











    $data = [


      'admin_name' =>$request->admin_name,
      'profession'=>$request->profession,
      'city'=>$request->city,

      'profession_joinend'=>$request->profession_joinend,
      'role'=>$request->role,
      'country'=>$request->country,
      'language'=>$request->language,


      'contact'=>$request->contact,
      'skype'=>$request->skype,
      'email'=>$request->email,
      'admin_image'=>$admin_img_name,
      'cover_image'=>$cover_image_name,



    ];

    admin_profile::first()->update($data);


    return redirect()->route('admin_profile_admin')->with('success','Admin Profile data update successfully');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\admin_profile  $admin_profile
   * @return \Illuminate\Http\Response
   */
  public function destroy(admin_profile $admin_profile)
  {

    // delete the applicant
    if (Auth::check()) {

      if (admin_profile::first()->exists()) {



        // remove file from storage
        $table_data = admin_profile::first();

        $image_path = $table_data->admin_image;
        $image_path2 = $table_data->cover_image;

        if (File::exists(public_path('admin_profile_image/') . $image_path)) {
          File::delete(public_path('admin_profile_image/') . $image_path);

          if (File::exists(public_path('cover_profile_image/') . $image_path2)) {
            File::delete(public_path('cover_profile_image/') . $image_path2);
          }
        } else {
          return redirect()->route('admin_profile_admin')->with('error', 'Images are not found associated with this table_data!');
        }

        admin_profile::first()->delete();

        return redirect()->route('admin_profile_admin')->with('success', 'Table data deleted successfully!');
      } else {
        return redirect()->route('admin_profile_admin')->with('error', 'Table data does not exist! So can not delete!');
      }
    } else {
      return redirect()->route('login')->with('error', 'You are not authorized to delete this appliction!');
    }
  }
}
