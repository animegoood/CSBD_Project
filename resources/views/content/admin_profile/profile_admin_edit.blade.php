@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Profile admin')

@section('content')

    <div class="card " style="height: 100%">
        <h3 class="text-center " style="color: #07a3bf; ">Profile admin edit</h3>
        <div class="card-body">
            <form action="{{ route('admin_profile_update') }}" method="POST" enctype="multipart/form-data">
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
                        <label class="form-label" for="admin_name">Admin Name</label>


                        <input class="form-control" placeholder="John Doe" name="admin_name" type="text" id="admin_name" value="{{ $admin_profile_update->admin_name }}"
                            maxlength="20">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="profession">Profession</label>


                        <input class="form-control" placeholder="UX Designer" name="profession" type="text" value="{{ $admin_profile_update->admin_name }}"
                            id="profession" maxlength="20">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="city">Your City</label>


                        <input class="form-control" type="text" name="city" id="city" value="{{ $admin_profile_update->city }}" maxlength="20">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="profession_joinend">Profession Joine Month Year</label>


                        <input class="form-control"value="{{ $admin_profile_update->admin_name }}" type="text" placeholder="April 2021" maxlength="20" name="profession_joinend"
                            id="profession_joinend">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="role">Role</label>


                        <input class="form-control" name="role" value="{{ $admin_profile_update->admin_name }}" type="text" placeholder="Developer" id="role" maxlength="20">


                    </div>


                    <div class="col-md-6">
                        <label class="form-label" for="country">Country</label>
                        <select name="country" id="country" class="select2 form-select" data-allow-clear="true">
                            <option >Select</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Australia"  >Australia</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Bangladesh">Bangladesh</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Belarus">Belarus</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Brazil">Brazil</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Canada">Canada</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="China">China</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="France">France</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Germany">Germany</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="India">India</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Indonesia">Indonesia</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Israel">Israel</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Italy">Italy</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Japan">Japan</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Korea">Korea, Republic of</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Mexico">Mexico</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Philippines">Philippines</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Russia">Russian Federation</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="South Africa">South Africa</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Thailand">Thailand</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Turkey">Turkey</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="Ukraine">Ukraine</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="United Arab Emirates">United Arab Emirates</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="United Kingdom">United Kingdom</option>
                            <option  {{$admin_profile_update->country ? 'selected' : ''}} value="United States">United States</option>
                        </select>
                    </div>


                    <div class="col-md-6 select2-primary">
                        <label class="form-label" for="language">Language</label>
                        <select id="language" name="language" class="select2 form-select">

                          <option >Select</option>
                            <option {{$admin_profile_update->language ? 'selected' : ''}} value="English">English</option>
                            <option {{$admin_profile_update->language ? 'selected' : ''}} value="French">French</option>
                            <option {{$admin_profile_update->language ? 'selected' : ''}} value="German">German</option>
                            <option {{$admin_profile_update->language ? 'selected' : ''}} value="Portuguese">Portuguese</option>
                        </select>
                    </div>



                    <div class="col-md-6">
                        <label class="form-label" for="contact">Contact</label>


                        <input class="form-control" name="contact" type="text" value="{{ $admin_profile_update->contact  }}" id="contact">

                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="skype">Skype</label>


                        <input class="form-control" value="{{ $admin_profile_update->skype  }}"  name="skype" type="url" id="skype">

                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="email">Email</label>


                        <input class="form-control" value="{{ $admin_profile_update->email  }}"  name="email" type="email" id="email">

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
