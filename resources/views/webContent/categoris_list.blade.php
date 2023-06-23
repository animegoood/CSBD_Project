@extends('webContent.weblayouts.webHome')

@section('title', 'Works')

@section('websection')
    <!-- works section-->
    <div class="section">
        <div class="container">
            <!--Section title-->
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <p class="section-description bg-base-color">Checkout Categories</p>
                        <h2 class="section-title">Blog Categories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!--works-filters-->
                    <div class="works-filters">
                        <ul class="list-inline">

                            @foreach ($category_details as $category_detail)
                                <li class="filter" data-filter=".{{ $category_detail->category_name }}">
                                    {{ $category_detail->category_name }}</li>
                            @endforeach
                            {{--
                            <li class="filter" data-filter=".Devlopment">Devlopment</li>
                            <li class="filter" data-filter=".Tutorials">Tutorials</li>
                            <li class="filter" data-filter=".Branding">Branding</li>
                            <li class="filter" data-filter=".LifeStyle">LifeStyle</li> --}}
                        </ul>
                    </div>
                </div>
            </div>




            <div class="works-items">
                <div class="row">

                    {{-- @foreach ($category_details as $category_detail) --}}

                    <div class="col-lg-4 col-md-6 mix {{ $category_details->category_name }} ">
                        <div class="works-item wow customFadeInUp slow">

                            <div class="blog-item">
                                <div class="thumbnail">
                                    <img src="{{ asset('Blog_thumbnail_image/' . $postsBYcategory->Blog_thumbnail) }}" alt="">
                                </div>
                                <h5><a href="{{ route('blog_single', $blog->id) }}">{{ $postsBYcategory->Blog_titles }}</a></h5>
                                <p>
                                    {{ $blog->Blog_highlight_description }}
                                </p>
                                <a class="btn-custom" href="{{ route('blog_single', $postsBYcategory->id) }}">Read More</a>

                            </div>
                        </div>
                    </div>





                    {{-- @endforeach --}}
                    {{-- <div class="col-lg-4 col-md-6 mix Devlopment ">
                        <div class="works-item wow customFadeInUp slow">




                        </div>
                    </div> --}}






                </div>
            </div>

        </div>
    </div>

@stop
