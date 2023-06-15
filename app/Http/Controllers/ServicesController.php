<?php

namespace App\Http\Controllers;

use App\Models\services;
use App\Http\Requests\StoreservicesRequest;
use App\Http\Requests\UpdateservicesRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view("webContent.services");
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */


  public function admin()
  {
    // if (!Auth::check()) {

    //   return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    // }

    return view('content.pages.service_section_admin');
  }


  public function create()
  {
    if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }

    return view('content.pages.admin_services.services_section_admin');
  }
  public function list()
  {


    if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }

    $service_lists = DB::table('services')->paginate(5);
    return view('content.pages.admin_services.services_section_list', compact('service_lists'));



  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\StoreservicesRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreservicesRequest $request)
  {

    if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }


    $request->validated();

    // for image testimonial

    $testimonials_image_name = time() . Str::upper(Str::random(10)) . '.' . $request->testimonials_image->extension();

    $request->testimonials_image->move(public_path('Testimonials_image'), $testimonials_image_name);

    // for image sponser
    $sponserimage_name = time() . Str::upper(Str::random(10)) . '.' . $request->sponser_images->extension();

    $request->sponser_images->move(public_path('sponser_img'), $sponserimage_name);




    $data = [


      'service_icon' => $request->service_icon,
      'service_name' => $request->service_name,
      'service_description' => $request->service_description,

      'testimonials_image' => $testimonials_image_name,
      'testimonials_name' => $request->testimonials_name,
      'testimonials_job' => $request->testimonials_job,
      'testimonials_description' => $request->testimonials_description,


      'pricing_name' => $request->pricing_name,
      'pricing' => $request->pricing,
      'pricing_month' => $request->pricing_month,
      'pricing_services_1' => $request->pricing_services_1,
      'pricing_services_2' => $request->pricing_services_2,
      'pricing_services_3' => $request->pricing_services_3,
      'pricing_services_4' => $request->pricing_services_4,
      'pricing_services_5' => $request->pricing_services_5,

      'sponser_images' => $sponserimage_name,



    ];

    services::create($data);


    return redirect()->route('services_section_admin')->with('success', 'Services data save successfully!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\services  $services
   * @return \Illuminate\Http\Response
   */
  public function show(services $services)
  {
    $service_details = DB::table('services')->get()->all();


    return view('webContent.services', compact('service_details'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\services  $services
   * @return \Illuminate\Http\Response
   */
  public function edit(services $services,$id)
  {

    if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }

    $service_section_details = services::findOrFail($id);

    return view('content.pages.admin_services.services_section_edit', compact('service_section_details'));


  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\UpdateservicesRequest  $request
   * @param  \App\Models\services  $services
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateservicesRequest $request, services $services,$id)
  {



  if (!Auth::check()) {

      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }



    $request->validated();




    $get_data = services::findOrFail($id);
    $image_path1 = $get_data->testimonials_image;
    $image_path2 = $get_data->sponser_images;


    //for testimonial image


    if ($request->hasFile('testimonials_image')) {

      if (File::exists(public_path('Testimonials_image/') . $image_path1)) {

        File::delete(public_path('Testimonials_image/') . $image_path1);
      }
      // for image testimonial

      $testimonials_image_name = time() . Str::upper(Str::random(10)) . '.' . $request->testimonials_image->extension();

      $request->testimonials_image->move(public_path('Testimonials_image'), $testimonials_image_name);
    } else {
      $testimonials_image_name = $get_data->testimonials_image;
    }



    //sponser image

    if ($request->hasFile('sponser_images')) {

      if (File::exists(public_path('sponser_img/') . $image_path2)) {

        File::delete(public_path('sponser_img/') . $image_path2);
      }


      // for image sponser
      $sponserimage_name = time() . Str::upper(Str::random(10)) . '.' . $request->sponser_images->extension();

      $request->sponser_images->move(public_path('sponser_img'), $sponserimage_name);
    } else {

      $sponserimage_name = $get_data->sponser_images;
    }








    $data = [


      'service_icon' => $request->service_icon,
      'service_name' => $request->service_name,
      'service_description' => $request->service_description,

      'testimonials_image' => $testimonials_image_name,
      'testimonials_name' => $request->testimonials_name,
      'testimonials_job' => $request->testimonials_job,
      'testimonials_description' => $request->testimonials_description,


      'pricing_name' => $request->pricing_name,
      'pricing' => $request->pricing,
      'pricing_month' => $request->pricing_month,
      'pricing_services_1' => $request->pricing_services_1,
      'pricing_services_2' => $request->pricing_services_2,
      'pricing_services_3' => $request->pricing_services_3,
      'pricing_services_4' => $request->pricing_services_4,
      'pricing_services_5' => $request->pricing_services_5,

      'sponser_images' => $sponserimage_name,



    ];

    services::findOrFail($id)->update($data);


    return redirect()->route('services_section_admin')->with('success', 'Services data update successfully!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\services  $services
   * @return \Illuminate\Http\Response
   */
  public function destroy(services $services,$id)
  {
    if (Auth::check()) {
      if (services::findOrFail($id)->exists()) {


        // remove file from storage
        $table_data = services::findOrFail($id);

        $image_path = $table_data->testimonials_image;
        $image_path2 = $table_data->sponserimage_name;

        if (File::exists(public_path('Testimonials_image/') . $image_path)) {
          File::delete(public_path('Testimonials_image/') . $image_path);

          if (File::exists(public_path('sponser_img/') . $image_path2)) {
            File::delete(public_path('sponser_img/') . $image_path2);
          }
        } else {
          return redirect()->route('services_section_admin')->with('error', 'Images are not found associated with this table_data!');
        }
        services::first()->delete();

        return redirect()->route('services_section_admin')->with('success', 'Table data deleted successfully!');
      } else {
        return redirect()->route('services_section_admin')->with('error', 'Table data does not exist! So can not delete!');
      }
    } else {
      return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    }
  }
}
