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
                        <h2 class="section-title"> Blog Single </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--Blog-single-->
                <div class="col-lg-8  wow customFadeInUp slow">
                    <div class="blog-single">
                        <div class="thumbnail">
                            <img src="assets/img/blog/3.jpg" alt="">
                        </div>
                        <h4 class="title">Daily Habits to increase your productivity levels.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                        <p class="quote">sunt in culpa qui officia deserunt mollit anim id est laborum
                            .Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            Ut enim ad minim veniam.
                        </p>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat
                        cupidatat non proident,

                        <div class="row">
                            <div class="col-lg-5">
                                <img src="assets/img/blog/2.jpg" alt="">
                            </div>
                            <div class="col-lg-7">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                    commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat
                                    non proident ,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit.
                                </p>
                            </div>
                        </div>
                        Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt
                        in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat
                        cupidatat non proident.
                        </p>
                        <div class="meta">
                            <p class="mb-0 ">
                                <span><i class="far fa-clock"></i>August 21, 2020</span>
                                <span><i class="fas fa-tag"></i>Lifestyle</span>
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
                            <img src="assets/img/author.jpg" alt="">
                            <div class="author">
                                <h5>Elizabeth Elmiz</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.
                                    Quis ipsum suspendisse vel facilisis.</p>
                            </div>
                        </div>
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
