@extends('webContent.weblayouts.webHome')
@section('websection')

    <!-- blog section-->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <p class="section-description bg-base-color">Read a new post</p>
                        <h2 class="section-title"> Blog Single </h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <!--blog Single-->
                @foreach ($blog_single_details as $blog_single_detail)
                    <!--Blog-single-->
                    <div class="col-lg-8  wow customFadeInUp slow">
                        <div class="blog-single">
                            <div class="thumbnail">
                                {{-- <img src="{{ $blogImgUrl }}" alt="Blog-Image"> --}}
                            </div>
                            <h4 class="title">{{ $blog_single_detail->blog_title }}</h4>
                            <p>{{ $blog_single_detail->main_content }}
                            </p>
                            <br>
                            <p class="quote">{{ $blog_single_detail->content_imp_highlight }}
                            </p>
                            <br>
                            <p>{{ $blog_single_detail->rest_main_content }}
                            </p>
                            <div class="meta">
                                <p class="mb-0 ">
                                    <span><i class="far fa-clock"></i>{{ $blog_single_detail->blog_post_date }}</span>
                                    <span><i class="fas fa-tag"></i>{{ $blog_single_detail->categories }}</span>
                                </p>
                                <div class="social-links ml-auto">
                                    <ul class="list-inline">
                                        <li> Share:</li>
                                        <li><a href="#"> <i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-author">
                                {{-- <img src="{{ $authorBlogImgUrl }}" alt=""> --}}
                                <div class="author">
                                    <h5>{{ $blog_single_detail->author_name }}</h5>
                                    <p>{{ $blog_single_detail->author_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!--Sidebar-->

                <div class="col-lg-4">

                    <!--Search-->

                    <div class="widget widget-search  wow customFadeInUp delay-0-2s slow">
                        <div class="widget-title">
                            <h5>Search</h5>
                        </div>
                        <form action="blog-single.html" class="search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                            <button class="submit-btn" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <!--Categories-->
                    <div class="widget widget-categories  wow customFadeInUp delay-0-3s slow">
                        <div class="widget-title">
                            <h5>Categories</h5>
                        </div>
                        <ul>
                            <li class="cat-item d-flex align-items-center">
                                <a href="#"> Design </a>
                                <span class="badge badge-pill ml-auto">5</span>
                            </li>
                            <li class="cat-item d-flex align-items-center">
                                <a href="#">Development</a>
                                <span class="badge  badge-pill ml-auto">15</span>
                            </li>
                            <li class="cat-item d-flex align-items-center">
                                <a href="#">Tutorials</a>
                                <span class="badge badge-pill ml-auto">4</span>
                            </li>
                            <li class="cat-item d-flex align-items-center">
                                <a href="#">Branding</a>
                                <span class="badge badge-pill ml-auto">3</span>
                            </li>
                            <li class="cat-item d-flex align-items-center">
                                <a href="#">Lifestyle</a>
                                <span class="badge badge-pill ml-auto">2</span>
                            </li>
                        </ul>
                    </div>

                    <!--Recent-post-->
                    <div class="widget widget-recent-posts wow customFadeInUp delay-0-4s slow">
                        <div class="widget-title">
                            <h5>Recent Posts</h5>
                        </div>
                        <ul>
                            <li class="post-item d-flex align-items-center">
                                <img src="assets/img/blog/1.jpg" alt="">
                                <div class="right">
                                    <h6>How To become a web designer.</h6>
                                    <p>August 21, 2020</p>
                                </div>
                            </li>
                            <li class="post-item d-flex align-items-center">
                                <img src="assets/img/blog/2.jpg" alt="">
                                <div class="right">
                                    <h6>7 Most essential frontend development tools.</h6>
                                    <p>August 21, 2020</p>
                                </div>
                            </li>
                            <li class="post-item d-flex align-items-center">
                                <img src="assets/img/blog/4.jpg" alt="">
                                <div class="right">
                                    <h6>15 Quick Tips That Will Help You Get Hired Fast.</h6>
                                    <p>August 21, 2020</p>
                                </div>
                            </li>
                            <li class="post-item d-flex align-items-center">
                                <img src="assets/img/blog/6.jpg" alt="">
                                <div class="right">
                                    <h6>How To Create Your First UX Design Portfolio?</h6>
                                    <p>August 21, 2020</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!--tags-->
                    <div class="widget widget-tags wow customFadeInUp delay-0-5s slow">
                        <div class="widget-title">
                            <h5>Tags</h5>
                        </div>
                        <ul class="list-inline">
                            <li>Productivity</li>
                            <li>Business</li>
                            <li>Tools</li>
                            <li>Levels</li>
                            <li>Daily Habits</li>
                            <li>Bussness</li>
                            <li>Tips</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
