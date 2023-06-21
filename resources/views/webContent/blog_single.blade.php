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


                        {{-- coments


                        <div class="wpo-blog-single-section section-padding">
                          <div class="container">
                              <div class="row">
                                  <div class="col  col-12">
                                      <div class="contact-form-wrapper">
                                          <div style="text-align: center; padding-bottom:30px">
                                              <form action="https://monoar.xyz/add_comment" method="POST"><input type="hidden" name="_token" value="8E4Jb98qAfVFBBbDp4m5PMv6l15BPPrB4BWLqwmV">                                                            <div class="col-lg-12">
                                                      <div class="form-group">
                                                          <label for="contact-message">Your Comments</label>
                                                          <textarea placeholder="commets here" name="comment"></textarea>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-12">
                                                      <input type="submit" class="rn-btn" value="Comment">
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>


                                  <div class="col  col-12">
                                      <div class="wpo-blog-content contact-form-wrapper">

                                          <div class="entry-meta">
                                              <ul>

                                                  <li><i class="fi flaticon-comment-white-oval-bubble"></i>
                                                      Comments 0</li>
                                                  <li><i class="fi flaticon-comment-white-oval-bubble"></i>
                                                      Reply 0 </li>
                                              </ul>
                                          </div>
                                          <div class="comments-area">

                                              <div class="comments-section">
                                                  <ol class="comments">
                                                      <li class="comment even thread-even depth-1" id="comment-1">
                                                                                                                              <div style="display:none;" class="replyDiv">
                                                              <form action="https://monoar.xyz/add_reply" method="POST"><input type="hidden" name="_token" value="8E4Jb98qAfVFBBbDp4m5PMv6l15BPPrB4BWLqwmV">                                                                            <input type="text" id="commentId" name="commentId" hidden="">
                                                                  <textarea placeholder="write " name="reply"></textarea><br>



                                                                  <input type="submit" value="Reply" class="btn ">

                                                                  <input type="reset" onclick="reply_close(this)" value="X" class="btn btn-close">
                                                              </form>
                                                          </div>
                                                      </li>
                                                  </ol>
                                              </div>






                                          </div>
                                      </div>

                                  </div>
                              </div>
                          </div>

                      </div>
 --}}


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
                                    <a href="#">{{ $category_detail->category_name }}</a>
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
    </div>

@stop
