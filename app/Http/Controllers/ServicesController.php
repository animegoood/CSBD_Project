<?php

namespace App\Http\Controllers;

use App\Models\services;
use App\Http\Requests\StoreservicesRequest;
use App\Http\Requests\UpdateservicesRequest;
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
  public function create()
  {
    return view('content.pages.services_section_admin');
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
      'service_details' => $request->service_details,

      'testimonials_image' => $testimonials_image_name,
      'testimonials_name' => $request->testimonials_name,
      'testimonials_job' => $request->testimonials_job,
      'testimonials_details' => $request->testimonials_details,


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
    //
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
    //
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