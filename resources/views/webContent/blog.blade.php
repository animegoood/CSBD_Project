@extends('webContent.weblayouts.webHome')
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
                <!--Blog-item-->

                @foreach ($blog_details as $blog_detail)
                <div class="col-lg-4 col-md-6 wow customFadeInUp slow">
                    <div class="blog-item">
                        <div class="thumbnail">
                            <img src="{{ $blogImgUrl }}" alt="">
                        </div>
                      
                        <p>
                            {{ $blog_detail->content_imp_highlight }}
                        </p>
                        <a href="{{ route('blog_single', $blog_detail->id)>Read More</a>
                    </div>
                </div>
            @endforeach


            </div>


            <div class="row mb-30 wow customFadeInUp slow">
                <div class="col-12">
                    <!--pagination-->
                    <div class="pagination-nav text-center">
                        <ul class="pagination ">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
