@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'blog admin')

@section('content')

    <div class="card " style="height: 100%">
        <h3 class="text-center " style="color: #07a3bf; ">blog Section </h3>
        <div class="card-body">
            <form action="{{ route('blog_section_store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- @if (session()->has('session'))
                    <span class="text-success">{{ session()->get('session') }}</span>
                @endif --}}

                @if ($errors->any())
                    @foreach ($errors->all() as $messages)
                        <span class="text-danger">{{ $messages }}</span>
                    @endforeach
                @endif

                <div class="row mb-5">



                    <div class="col-md-6">

                        <label class="form-label" for="Blog_titles">Blog_titles</label>
                        <div class="mt-2">


                            <input type="text" id="Blog_titles" name="Blog_titles" class="form-control">
                        </div>



                    </div>



                    <div class="col-md-6">

                      <label class="form-label" for="Blog_descrioption">Blog_descrioption</label>
                      <div class="mt-2">


                          <input type="text" id="Blog_descrioption" name="Blog_descrioption" class="form-control">
                      </div>



                  </div>

                  <div class="col-md-6">

                    <label class="form-label" for="Blog_highlight_description">Blog_highlight_description</label>
                    <div class="mt-2">


                        <input type="text" id="Blog_highlight_description" name="Blog_highlight_description" class="form-control">
                    </div>



                </div>


                <div class="col-md-6">

                  <label class="form-label" for="Blog_image_description">Blog_image_description</label>
                  <div class="mt-2">


                      <input type="text" id="Blog_image_description" name="Blog_image_description" class="form-control">
                  </div>



              </div>


              <div class="col-md-6">

                <label class="form-label" for="Blog_date">Blog_date</label>
                <div class="mt-2">


                    <input type="date" id="Blog_date" name="Blog_date" class="form-control">
                </div>



            </div>


            <div class="col-md-6">

              <label class="form-label" for="Blog_categories">Blog_categories</label>
              <div class="mt-2">


                  <input type="text" id="Blog_categories" name="Blog_categories" class="form-control">
              </div>



          </div>

          <div class="col-md-6">

            <label class="form-label" for="Blog_author_name">Blog_author_name</label>
            <div class="mt-2">


                <input type="text" id="Blog_author_name" name="Blog_author_name" class="form-control">
            </div>



        </div>


        <div class="col-md-6">

          <label class="form-label" for="Blog_author_description">Blog_author_description</label>
          <div class="mt-2">


              <input type="text" id="Blog_author_description" name="Blog_author_description" class="form-control">
          </div>



      </div>



                    <div class="col-md-6">
                        <label class="form-label" for="Blog_thumbnail">
                            Blog_thumbnail Image
                        </label>
                        <div class=" mt-2">
                            <input class="form-control" type="file" id="Blog_thumbnail" accept=".png,.jpg"
                                name="Blog_thumbnail">

                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="Blog_image">
                            Blog_image Image
                        </label>
                        <div class=" mt-2">
                            <input class="form-control" type="file" id="Blog_image" accept=".png,.jpg"
                                name="Blog_image">

                        </div>
                    </div>




                    <div class="col-md-6">
                        <label class="form-label" for="Blog_author_image">
                          Blog_author Image
                        </label>
                        <div class=" mt-2">
                            <input class="form-control" type="file" id="Blog_author_image" accept=".png,.jpg"
                                name="Blog_author_image">

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
