@extends('webContent.weblayouts.webHome')
@section('title','Blog')
@section('websection')

    <!-- blog-->
    <div class="section">
      <div class="container">
          <!--Section title-->
          <div class="row">
              <div class="col-12 mb-40">
                  <div class="section-heading">
                      <p class="section-description bg-base-color">Check out my Blog</p>
                      <h2 class="section-title"> My Latest Posts</h2>
                  </div>
              </div>
          </div>
          <div class="row">

            @foreach ( $blogs as $blog )


              <!--Blog-item-->
              <div class="col-lg-4 col-md-6 wow customFadeInUp slow">
                  <div class="blog-item">
                      <div class="thumbnail">
                          <img src="{{asset('Blog_thumbnail_image/'.$blog->Blog_thumbnail)}}" alt="">
                      </div>
                      <h5><a href="{{ route('blog_single', $blog->id) }}">{{$blog->Blog_titles}}</a></h5>
                      <p>
                          {{$blog->Blog_highlight_description}}
                      </p>
                      <a class="btn-custom" href="{{ route('blog_single', $blog->id) }}">Read More</a>

                  </div>
              </div>

            @endforeach




          </div>
          <div class="row mb-30 wow customFadeInUp slow">
              <div class="col-12">
                  <!--pagination-->
                  <div class="pagination-nav text-center">
                    <ul class="pagination ">
                      {{ $blogs->links() }}

                  </ul>

                  </div>
              </div>
          </div>
      </div>
  </div>

@stop
