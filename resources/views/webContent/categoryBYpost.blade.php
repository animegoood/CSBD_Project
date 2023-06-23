@extends('webContent.weblayouts.webHome')
@section('title', 'PostsByCategory')
@section('websection')

    <!-- blog-->
    <div class="section">
        <div class="container">
            <!--Section title-->
            <div class="row">
                <div class="col-12 mb-40">
                    <div class="section-heading">
                        <p class="section-description bg-base-color">Check out PostsByCategory</p>
                        <h2 class="section-title">{{ $category->category_name }}</h2>

                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($postsBYcategory as $postBYcategory)
                    <!--Blog-item-->
                    <div class="col-lg-4 col-md-6 wow customFadeInUp slow">
                        <div class="blog-item">
                            <div class="thumbnail">
                                <img src="{{ asset('Blog_thumbnail_image/' . $postBYcategory->Blog_thumbnail) }}" alt="">
                            </div>
                            <h5><a href="{{ route('blog_single', $postBYcategory->id) }}">{{ $postBYcategory->Blog_titles }}</a></h5>
                            <p>
                                {{ $postBYcategory->Blog_highlight_description }}
                            </p>
                            <a class="btn-custom" href="{{ route('blog_single', $postBYcategory->id) }}">Read More</a>

                        </div>
                    </div>
                @endforeach




            </div>


            <!--pagination-->
            <div class="text-center">
{{--
                {{ $blogs->links() }} --}}



            </div>

        </div>
    </div>

@stop
