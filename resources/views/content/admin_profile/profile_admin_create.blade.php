@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Profile admin')

@section('content')

    <div class="card " style="height: 100%">
        <h3 class="text-center " style="color: #07a3bf; ">Profile admin create</h3>
        <div class="card-body">
            <form action="{{ route('admin_profile_store') }}" method="POST" enctype="multipart/form-data">
                @csrf

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
                        <label class="form-label" for="admin_name">Admin Name</label>


                        <input class="form-control" placeholder="John Doe" name="admin_name" type="text" id="admin_name"
                            maxlength="20">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="profession">Profession</label>


                        <input class="form-control" placeholder="UX Designer" name="profession" type="text"
                            id="profession" maxlength="20">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="city">Your City</label>


                        <input class="form-control" type="text" name="city" id="city" maxlength="20">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="profession_joinend">Profession Joine Month Year</label>


                        <input class="form-control" type="text" placeholder="April 2021" maxlength="20" name="profession_joinend"
                            id="profession_joinend">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="role">Role</label>


                        <input class="form-control" name="role" type="text" placeholder="Developer" id="role" maxlength="20">


                    </div>


                    <div class="col-md-6">
                        <label class="form-label" for="country">Country</label>
                        <select name="country" id="country" class="select2 form-select" data-allow-clear="true">
                            <option selected>Select</option>
                            <option value="Australia">Australia</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Canada">Canada</option>
                            <option value="China">China</option>
                            <option value="France">France</option>
                            <option value="Germany">Germany</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Japan">Japan</option>
                            <option value="Korea">Korea, Republic of</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Russia">Russian Federation</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                        </select>
                    </div>


                    <div class="col-md-6 select2-primary">
                        <label class="form-label" for="language">Language</label>
                        <select id="language" name="language" class="select2 form-select">

                          <option selected>Select</option>
                            <option value="English">English</option>
                            <option value="French">French</option>
                            <option value="German">German</option>
                            <option value="Portuguese">Portuguese</option>
                        </select>
                    </div>



                    <div class="col-md-6">
                        <label class="form-label" for="contact">Contact</label>


                        <input class="form-control" name="contact" type="text" id="contact">

                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="skype">Skype</label>


                        <input class="form-control" name="skype" type="url" id="skype">

                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="email">Email</label>


                        <input class="form-control" name="email" type="email" id="email">

                    </div>


                    <div class="col-6">
                        <label class="form-label" for="admin_image">
                            Author Image
                        </label>
                        <div class=" mt-3">
                            <input class="form-control" type="file" id="admin_image" accept=".png ,.jpg"
                                name="admin_image">

                        </div>

                    </div>

                    <div class="col-6">
                        <label class="form-label" for="cover_image">
                            Cover Image
                        </label>
                        <div class=" mt-3">
                            <input class="form-control" type="file" id="cover_image" accept=".png,.jpg"
                                name="cover_image">

                        </div>

                    </div>


                    {{-- <div class="col-md-6">
                        <label class="form-label" for="file-upload2">
                            Download CV
                        </label>
                        <div class=" mt-3">
                            <input class="form-control" type="file" id="file-upload2" accept=".pdf" name="downloadCV">

                        </div>
                    </div> --}}



                </div>

                <div style="float: right">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>

            </form>














        </div>



    @endsection
