@extends('webContent.weblayouts.webHome')

@section('title', 'Blog post')
@section('websection')



    <!-- blog section-->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <p class="section-description bg-base-color">Read a new post</p>
                        <h2 class="section-title"> Blog Post </h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <!--Blog-single-->
                <div class="col-lg-8  wow customFadeInUp slow">
                    <div class="blog-single">
                        <div class="thumbnail">
                            <img src="{{ asset('Blog_thumbnail_image/' . $blog_details->Blog_thumbnail) }}" alt="">
                        </div>
                        <h4 class="title">{{ $blog_details->Blog_titles }}</h4>
                        <p>
                            {{ $blog_details->Blog_descrioption }}
                        <p class="quote">{{ $blog_details->Blog_highlight_description }}</p>

                        <div class="row">
                            <div class="col-lg-5">
                                <img src="{{ asset('Blog_image/' . $blog_details->Blog_image) }}" alt="">
                            </div>
                            <div class="col-lg-7">
                                <p>
                                    {{ $blog_details->Blog_image_description }}
                                </p>
                            </div>
                        </div>
                        </p>
                        <div class="meta">
                            <p class="mb-0 ">
                                <span><i class="far fa-clock"></i>{{ $blog_details->Blog_date }}</span>
                                <span><i class="fas fa-tag"></i>{{ $blog_details->Blog_categories }}</span>
                            </p>
                            <div class="social-links ml-auto">
                                <ul class="list-inline">
                                    <li> Share:</li>
                                    <li><a href="#"> <i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-author">
                            <img src="{{ asset('Blog_author_image/' . $blog_details->Blog_author_image) }}" alt="">
                            <div class="author">
                                <h5>{{ $blog_details->Blog_author_name }}</h5>
                                <p>{{ $blog_details->Blog_author_description }}</p>
                            </div>
                        </div>


                        {{-- comments --}}


                        <section class="content-item mt-5" id="comments">


                            <form action="{{ route('comment_store') }}" method="POST">
                                <h3 class="text-center mb-3">New Comment</h3>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-2 hidden-xs">
                                            <img class="img-responsive"
                                                src="https://bootdey.com/img/Content/avatar/avatar1.png" alt>
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                            <textarea class="form-control" id="message" placeholder="Your message" required></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                <button type="submit" style="float:right;" class="btn-custom pull-right">Submit</button>
                            </form>
                            <h3>4 Comments</h3>

                            <div class="media">
                                {{-- <a class="pull-left" href="#"><img class="media-object"
                                                    src="https://bootdey.com/img/Content/avatar/avatar1.png" alt></a> --}}
                                <div class="media-body">
                                    <h4 class="media-heading">John Doe</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum
                                        dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <ul class="list-unstyled list-inline media-detail pull-left">
                                        <li><i class="fa fa-calendar"></i>27/02/2014</li>
                                        <li><i class="fa fa-thumbs-up"></i>13</li>
                                    </ul>
                                    <ul class="list-unstyled list-inline media-detail pull-right">
                                        <li class><a href>Like</a></li>
                                        <li class><a href>Reply</a></li>
                                    </ul>
                                </div>
                            </div>




                    </section>



                </div>
                </div>

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

                            @foreach ($category_details as $category_detail)
                                <li class="cat-item d-flex align-items-center">
                                    <a href="{{ route('categoryBypost', $category_detail->id) }}">{{ $category_detail->category_name }}</a>
                                    <span class="badge badge-pill ml-auto">5</span>
                                </li>
                            @endforeach
                            {{-- <li class="cat-item d-flex align-items-center">
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
                            </li> --}}
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



    @stop
