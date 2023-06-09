@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'services admin')

@section('content')

    <div class="card " style="height: 100%">
        <h3 class="text-center " style="color: #07a3bf; ">Services Section </h3>
        <div class="card-body">
            <form action="{{ route('services_section_update', $service_section_details->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')

                {{-- @if (session()->has('session'))
                    <span class="text-success">{{ session()->get('session') }}</span>
                @endif --}}

                {{-- @if ($errors->any())
                    @foreach ($errors->all() as $messages)
                        <span class="text-danger">{{ $messages }}</span>
                    @endforeach
                @endif --}}

                <div class="row mb-5">

                  <div class="col-md-6">
                    <label class="form-label" for="  service_icon">
                        Service Icon (only font-awesome)
                    </label>

                    <input class="form-control" type="text" id="  service_icon" value="{{ $service_section_details->service_icon }}" name="service_icon" placeholder='<i class="fas fa-camera-retro'>


                </div>



                    <div class="col-md-6">

                        <label class="form-label" for="service_name">service_name</label>


                        <input value="{{ $service_section_details->service_name }}"  placeholder="Photography" class="form-control"
                            name="service_name" type="text" id="service_name">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="service_description">service_description</label>


                        <input value="{{ $service_section_details->service_description }}"  rows="3" placeholder="Working with client and community, we deliver masterplans that create vibrant new places and
                        spaces, attract people." class="form-control"
                            name="service_description" type="text" id="service_description">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="testimonials_name">testimonials_name</label>


                        <input value="{{ $service_section_details->testimonials_name }}"  placeholder="Donia Martin" class="form-control" name="testimonials_name" type="text"
                            id="testimonials_name">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="testimonials_job">testimonials_job</label>


                        <input value="{{ $service_section_details->testimonials_job }}"  placeholder="Product Design" class="form-control" name="testimonials_job" type="text"
                            id="testimonials_job">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="testimonials_description">testimonials_description</label>



                        <input value="{{ $service_section_details->testimonials_description }}"  rows="3"  placeholder="Lorem ipsum dolor sit amet consec , tetur adipiscing elit. Etiam fringilla pretium lacus." class="form-control" name="testimonials_description" type="text"
                            id="testimonials_description">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="pricing_name">pricing_name</label>


                        <input value="{{ $service_section_details->pricing_name }}"  placeholder="Basic" class="form-control" name="pricing_name" type="text"
                            id="pricing_name">


                    </div>


                    <div class="col-md-6">
                        <label class="form-label" for="pricing">pricing</label>


                        <input value="{{ $service_section_details->pricing }}"  placeholder="09" class="form-control" name="pricing" type="number"
                            id="pricing">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="pricing_month">pricing_month</label>


                        <input value="{{ $service_section_details->pricing_month }}"  placeholder="$/month" class="form-control" name="pricing_month" type="text"
                            id="pricing_month">


                    </div>





                    <div class="col-md-6">
                        <label class="form-label" for="pricing_services_1">pricing_services_1</label>


                        <input value="{{ $service_section_details->pricing_services_1 }}"  placeholder="10 Pages." class="form-control" name="pricing_services_1" type="text"
                            id="pricing_services_1">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="pricing_services_2">pricing_services_2</label>


                        <input value="{{ $service_section_details->pricing_services_2 }}"  placeholder="Free Installation." class="form-control" name="pricing_services_2" type="text"
                            id="pricing_services_2">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="pricing_services_3">pricing_services_3</label>


                        <input value="{{ $service_section_details->pricing_services_3 }}"  placeholder="Fee Hosting." class="form-control" name="pricing_services_3" type="text"
                            id="pricing_services_3">


                    </div>


                    <div class="col-md-6">
                        <label class="form-label" for="pricing_services_4">pricing_services_4</label>


                        <input value="{{ $service_section_details->pricing_services_4 }}"  placeholder="10 Addon Domains." class="form-control" name="pricing_services_4" type="text"
                            id="pricing_services_4">


                    </div>





                    <div class="col-md-6">
                        <label class="form-label" for="pricing_services_5">pricing_services_5</label>


                        <input value="{{ $service_section_details->pricing_services_5 }}"  placeholder="Email support" class="form-control" name="pricing_services_5" type="text"
                            id="pricing_services_5">


                    </div>



                    <div class="col-md-6">
                        <label class="form-label" for="testimonials_image">
                            Testimonials Image
                        </label>
                        <div class=" mt-2">
                            <input  class="form-control" type="file" id="testimonials_image" accept=".png,.jpg"
                                name="testimonials_image">

                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="sponser_images">
                            Sponsers Image
                        </label>
                        <div class=" mt-2">
                            <input class="form-control" type="file" id="sponser_images" accept=".png,.jpg"
                                name="sponser_images">

                        </div>
                    </div>

                </div>







        <div style="float: right">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary">Cancel</button>
        </div>
      </div>
        </form>














    </div>



@endsection
