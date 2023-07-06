@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home_admin')

@section('content')

    <div class="card " style="height: 100%">
        <h3 class="text-center " style="color: #07a3bf; "> Hero section </h3>
        <div class="card-body">
            <form action="{{ route('herosection-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                {{-- // @if (session()->has('session'))
                    // <span class="text-success">{{ session()->get('session') }}</span>

                    //
                @endif --}}

                {{-- @if ($errors->any())
                    @foreach ($errors->all() as $messages)
                        <span class="text-danger">{{ $messages }}</span>
                    @endforeach
                @endif --}}

                <div class="row mb-5">

                    <div class="col-md-6">
                        <label class="form-label" for="name_Symbol">Name Symbol (must be 1 char)</label>


                        <input class="form-control" name="name_Symbol" type="text" id="name_Symbol" maxlength="1">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="Yourname">Name </label>


                        <input class="form-control" name="Yourname" type="text" id="Yourname" maxlength="25">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="profession_1">Profession 1</label>


                        <input class="form-control" type="text" name="profession_1" id="profession_1" maxlength="25">


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="profession_2">Profession 2</label>


                        <input class="form-control" type="text" name="profession_2" id="profession_2" maxlength="25">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="social_1">Social media 1</label>


                        <input class="form-control" name="social_1" type="url" id="social_1">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="social_2">Social media 2</label>


                        <input class="form-control" name="social_2" type="url" id="social_2">


                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="social_3">Social media 3</label>


                        <input class="form-control" name="social_3" type="url" id="social_3">

                    </div>

                    <div class="col-6">
                        <label class="form-label" for="file-upload1">
                            Background Image
                        </label>
                        <div class=" mt-3">
                            <input class="form-control" type="file" id="file-upload1" accept=".png,.jpg"
                                name="Background_img">

                        </div>

                    </div>
                    <div class="col-6">
                        <label class="form-label" for="file-upload1">
                            Author Background Image
                        </label>
                        <div class=" mt-3">
                            <input class="form-control" type="file" id="file-upload1" accept=".png ,.jpg"
                                name="Author_background_image">

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
