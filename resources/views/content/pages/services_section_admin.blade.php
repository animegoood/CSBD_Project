@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'services admin')

@section('content')

    <div class="card " style="height: 100%">
        <h3 class="text-center " style="color: #07a3bf; ">Services Section </h3>
        <div class="card-body">
            <form action="{{ route('services_section_store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if (session()->has('session'))
                    <span class="text-success">{{ session()->get('session') }}</span>
                @endif

                @if ($errors->any())
                    @foreach ($errors->all() as $messages)
                        <span class="text-danger">{{ $messages }}</span>
                    @endforeach
                @endif

                <div class="row mb-5">

                    <div class="col-md-6">
                        <label class="form-label" for="intro">intro</label>


                        <input placeholder="I'm Elizabeth Elmiz, a UX & UI Designer and Photographer" class="form-control"
                            name="intro" type="text" id="intro">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="aboutinfo">aboutinfo</label>


                        <textarea rows="3" placeholder="I am a freelancer based in the United States and i have been" class="form-control"
                            name="aboutinfo" type="text" id="aboutinfo"></textarea>


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="Yourname">Yourname</label>


                        <input placeholder="Elizabeth Elmiz." class="form-control" name="Yourname" type="text"
                            id="Yourname">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="Youremail">Youremail</label>


                        <input placeholder="elizabeth.elmiz@gmail.com" class="form-control" name="Youremail" type="email"
                            id="Youremail">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="phone_number">phone number</label>


                        <input placeholder="+3 (123)-456-78-91." class="form-control" name="phone_number" type="number"
                            id="phone_number">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="location">location</label>


                        <input placeholder="New York City,USA" class="form-control" name="location" type="text"
                            id="location">


                    </div>


                    <div class="col-md-6">
                        <label class="form-label" for="freelancer">freelancer</label>


                        <input placeholder="available/unavailable" class="form-control" name="freelancer" type="text"
                            id="freelancer">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="experience">experience</label>


                        <input placeholder="8 years ." class="form-control" name="experience" type="text"
                            id="experience">


                    </div>





                    <div class="col-md-6">
                        <label class="form-label" for="social_1">Social media 1</label>


                        <input placeholder="www.djajknkdn.com" class="form-control" name="social_1" type="url"
                            id="social_1">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="social_2">Social media 2</label>


                        <input placeholder="www.djajknkdn.com" class="form-control" name="social_2" type="url"
                            id="social_2">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="social_3">Social media 3</label>


                        <input placeholder="www.djajknkdn.com" class="form-control" name="social_3" type="url"
                            id="social_3">

                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="work_1">work 1</label>


                        <input placeholder="Full stack Web Developer" class="form-control" name="work_1" type="text"
                            id="work_1">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="work_2">work 2</label>


                        <input placeholder="Back-End Developer" class="form-control" name="work_2" type="text"
                            id="work_2">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="work_3">work 3</label>


                        <input placeholder="UI/UX Designer" class="form-control" name="work_3" type="text"
                            id="work_3">


                    </div>


                    <div class="col-md-6">
                        <label class="form-label" for="work_year_1">work_year_1</label>


                        <input placeholder="2004 - 2007" class="form-control" name="work_year_1" type="text"
                            id="work_year_1">


                    </div>





                    <div class="col-md-6">
                        <label class="form-label" for="work_year_2">work_year_2</label>


                        <input placeholder="2004 - 2007" class="form-control" name="work_year_2" type="text"
                            id="work_year_2">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="work_year_3">work_year_3</label>


                        <input placeholder="2004 - 2007" class="form-control" type="text" name="work_year_3"
                            id="work_year_3">


                    </div>



                    <div class="col-md-6">
                        <label class="form-label" for="work_description_1">work_description_1</label>


                        <textarea rows="3"
                            placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae."
                            class="form-control" type="text" name="work_description_1" id="work_description_1"></textarea>


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="work_description_2">work_description_2</label>


                        <textarea rows="3"
                            placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae."
                            class="form-control" type="text" name="work_description_2" id="work_description_2"></textarea>


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="work_description_3">work_description_3</label>


                        <textarea rows="3"
                            placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae."
                            class="form-control" type="text" name="work_description_3" id="work_description_3"></textarea>


                    </div>


                    <div class="col-md-6">
                        <label class="form-label" for="eduction_1">eduction_1</label>


                        <input placeholder="Academic Degree" class="form-control" type="text" name="eduction_1"
                            id="eduction_1">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="eduction_2">eduction_2</label>


                        <input placeholder="Bachelor’s Degree" class="form-control" type="text" name="eduction_2"
                            id="eduction_2">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="eduction_3">eduction_3</label>


                        <input placeholder="Specialization Course" class="form-control" type="text" name="eduction_3"
                            id="eduction_3">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="education_year_1">education_year_1</label>


                        <input placeholder="2004 - 2007" class="form-control" type="text" name="education_year_1"
                            id="education_year_1">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="education_year_2">education_year_2</label>


                        <input placeholder="2004 - 2007" class="form-control" type="text" name="education_year_2"
                            id="education_year_2">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="education_year_3">education_year_3 </label>


                        <input placeholder="2004 - 2007" class="form-control" type="text" name="education_year_3"
                            id="education_year_3">


                    </div>



                    <div class="col-md-6">
                        <label class="form-label" for="education_description_1">education_description_1</label>


                        <textarea rows="3"
                            placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae."
                            class="form-control" type="text" name="education_description_1" id="education_description_1"></textarea>


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="education_description_2">education_description_2</label>


                        <textarea rows="3"
                            placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae."
                            class="form-control" type="text" name="education_description_2" id="education_description_2"></textarea>


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="education_description_3">education_description_3</label>


                        <textarea rows="3"
                            placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quo repudiandae."
                            class="form-control" type="text" name="education_description_3" id="education_description_3"></textarea>


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="service_icon">
                          Service Icon
                        </label>
                        <div class=" mt-3">
                            <input class="form-control" type="file" id="service_icon" accept=".png,.jpg"
                                name="service_icon">

                        </div>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label" for="testimonials_image">
                        Testimonials Image
                      </label>
                      <div class=" mt-3">
                          <input class="form-control" type="file" id="testimonials_image" accept=".png,.jpg"
                              name="testimonials_image">

                      </div>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label" for="sponser_images">
                      Sponsers Image
                    </label>
                    <div class=" mt-3">
                        <input class="form-control" type="file" id="sponser_images" accept=".png,.jpg"
                            name="sponser_images">

                    </div>
                </div>

                </div>





        </div>

        <div style="float: right">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary">Cancel</button>
        </div>

        </form>














    </div>



@endsection
