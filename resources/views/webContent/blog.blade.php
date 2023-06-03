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
              <!--Blog-item-->
              <div class="col-lg-4 col-md-6 wow customFadeInUp slow">
                  <div class="blog-item">
                      <div class="thumbnail">
                          <img src="assets/img/blog/1.jpg" alt="">
                      </div>
                      <h5><a href="{{route('blog_single')}}"> How To become a web designer.</a></h5>
                      <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing elit.
                           Officia nam hic eum aliquam temporibus...
                      </p>
                      <a href="{{route('blog_single')}}" class="btn-custom">Read More</a>
                  </div>
              </div>

              <!--Blog-item-->
              <div class="col-lg-4 col-md-6 wow customFadeInUp delay-0-2s slow">
                  <div class="blog-item">
                      <div class="thumbnail">
                          <img src="assets/img/blog/2.jpg" alt="">
                      </div>
                      <h5>
                          <a href="{{route('blog_single')}}">7 Most essential frontend development tools.</a>
                      </h5>
                      <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nam hic eum aliquam temporibus...
                      </p>
                      <a href="{{route('blog_single')}}" class="btn-custom">Read More</a>
                  </div>
              </div>

              <!--Blog-item-->
              <div class="col-lg-4 col-md-6 wow customFadeInUp delay-0-3s slow ">
                  <div class="blog-item">
                      <div class="thumbnail">
                          <img src="assets/img/blog/3.jpg" alt="">
                      </div>
                      <h5>
                          <a href="{{route('blog_single')}}">Daily Habits to increase your productivity levels.</a>
                      </h5>
                      <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nam hic eum aliquam temporibus...
                      </p>
                      <a href="{{route('blog_single')}}" class="btn-custom">Read More</a>
                  </div>
              </div>

              <!--Blog-item-->
              <div class="col-lg-4 col-md-6 wow customFadeInUp delay-0-4s slow">
                  <div class="blog-item">
                      <div class="thumbnail">
                          <img src="assets/img/blog/4.jpg" alt="">
                      </div>
                      <h5>
                          <a href="{{route('blog_single')}}"> 15 Quick Tips That Will Help You Get Hired Fast.</a>
                      </h5>
                      <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nam hic eum aliquam temporibus...
                      </p>
                      <a href="{{route('blog_single')}}" class="btn-custom">Read More</a>
                  </div>
              </div>

              <!--Blog-item-->
              <div class="col-lg-4 col-md-6 wow customFadeInUp delay-0-5s slow">
                  <div class="blog-item">
                      <div class="thumbnail">
                          <img src="assets/img/blog/5.jpg" alt="">
                      </div>
                      <h5>
                          <a href="{{route('blog_single')}}">Best Resources to help you learn Graphic Design</a>
                      </h5>
                      <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nam hic eum aliquam temporibus...
                      </p>
                      <a href="{{route('blog_single')}}" class="btn-custom">Read More</a>
                  </div>
              </div>

              <!--Blog-item-->
              <div class="col-lg-4 col-md-6 wow customFadeInUp delay-0-6s slow">
                  <div class="blog-item">
                      <div class="thumbnail">
                          <img src="assets/img/blog/6.jpg" alt="">
                      </div>
                      <h5>
                          <a href="{{route('blog_single')}}"> How To Create Your First UX Design Portfolio?</a>
                      </h5>
                      <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nam hic eum aliquam temporibus...
                      </p>
                      <a href="{{route('blog_single')}}" class="btn-custom">Read More</a>
                  </div>
              </div>
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
