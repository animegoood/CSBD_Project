@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')

    <div class="card " style="height: 100%">
        <h3 class="text-center " style="color: #07a3bf; "> Hero section </h3>
        <div class="card-body">
            <form action="{{ route('blog_single_store') }}" method="POST" enctype="multipart/form-data">
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
                    <label class="form-label" for="blog_title">Blog Title</label>


                    <input class="form-control" name="blog_title" type="text" id="blog_title" maxlength="20"
                        rows="3">


                </div>
                <div class="col-md-6">
                  <label class="form-label" for="author_name">Author Name</label>


                  <input class="form-control" name="author_name" type="text" id="author_name" maxlength="20"
                      rows="3">


              </div>

              <div class="col-md-6">
                  <label class="form-label" for="author_description">Author Description</label>


                  <textarea class="form-control" name="author_description" type="text" id="author_description" maxlength="100"
                      rows="3"></textarea>


              </div>
              <div class="col-md-6">
                <label class="form-label" for="categories">Categories</label>
                <select id="categories" name="categories" class="form-select">
                    <option selected> Select categories</option>
                    <option value="Life_style">LifeStyle</option>
                    <option value="Tech_News">Tech News</option>
                    <option value="Tech_and_startup">Tech & Startup</option>
                    <option value="Entertainment">Entertainment</option>
                    <option value="Business">Business</option>
                </select>

            </div>

                    <div class="col-md-6">
                        <label class="form-label" for="main_content">Main Content</label>


                        <textarea class="form-control" name="main_content" type="text" id="main_content" maxlength="255" rows="3"></textarea>


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="content_imp_highlight">Content Main Highlights</label>


                        <textarea class="form-control" name="content_imp_highlight" type="text" id="content_imp_highlight" maxlength="255"
                            rows="3"></textarea>


                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="rest_main_content">Rest Main Content</label>


                        <textarea class="form-control" name="rest_main_content" type="text" id="rest_main_content" maxlength="255"
                            rows="3"></textarea>


                    </div>


                    <div class="col-md-6">
                        <label class="form-label" for="blog_post_date">Content Main Highlights</label>


                        <input class="form-control" name="blog_post_date" type="date" id="blog_post_date" rows="3">


                    </div>





                    <div class="col-6">
                        <label class="form-label" for="file-upload1">
                            Blog Image
                        </label>
                        <div class=" mt-3">
                            <input class="form-control" type="file" id="file-upload1" name="blog_image" accept=".jpg,.png,">

                        </div>

                    </div>
                    <div class="col-6">
                        <label class="form-label" for="file-upload1">
                            Author Background Image
                        </label>
                        <div class=" mt-3">
                            <input class="form-control" type="file" id="file-upload1" name="author_image" accept=".jpg,.png," >

                        </div>

                    </div>

                </div>

                <div style="float: right">
                    <button type="submit" class="btn btn-primary ">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>


            </form>














        </div>



    @endsection
