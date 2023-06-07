<?php

namespace App\Http\Controllers;

use App\Models\services;
use App\Http\Requests\StoreservicesRequest;
use App\Http\Requests\UpdateservicesRequest;
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


    return view('content.pages.service_section_admin');
  }


  public function create()
  {
    return view('content.pages.admin_services.services_section_admin');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\StoreservicesRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreservicesRequest $request)
  {
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


    return redirect()->back()->with('session', 'Services data save successfully!');
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
  public function edit(services $services)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\UpdateservicesRequest  $request
   * @param  \App\Models\services  $services
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateservicesRequest $request, services $services)
  {


    //   if (!Auth::check()) {
    //     return redirect()->route('login')->with('error', 'You\'re not authenticated!');
    // }




    $request->validated();




    $get_data = services::first();
    $image_path1 = $get_data->testimonials_image;
    $image_path2 = $get_data->sponser_images;


    //for testimonial image


    if($request->hasFile('testimonials_image')){

    if (File::exists(public_path('Testimonials_image/') . $image_path1)) {

      File::delete(public_path('Testimonials_image/') . $image_path1);
    }
    // for image testimonial

    $testimonials_image_name = time() . Str::upper(Str::random(10)) . '.' . $request->testimonials_image->extension();

    $request->testimonials_image->move(public_path('Testimonials_image'), $testimonials_image_name);

  }
  else{
    $testimonials_image_name = $get_data->testimonials_image ;
  }



//sponser image

  if($request->hasFile('sponser_images')){

    if (File::exists(public_path('sponser_img/') . $image_path1)) {

      File::delete(public_path('sponser_img/') . $image_path1);
    }


    // for image sponser
    $sponserimage_name = time() . Str::upper(Str::random(10)) . '.' . $request->sponser_images->extension();

    $request->sponser_images->move(public_path('sponser_img'), $sponserimage_name);

  }else{

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

    services::first()->update($data);


    return redirect()->back()->with('session', 'Services data save successfully!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\services  $services
   * @return \Illuminate\Http\Response
   */
  public function destroy(services $services)
  {
    //
  }
}
