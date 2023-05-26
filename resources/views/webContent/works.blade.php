


@extends('webContent.weblayouts.webHome')
@section('websection')
    <!-- works section-->
    <div class="section">
        <div class="container">
            <!--Section title-->
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <p class="section-description bg-base-color">My Featured portfolio</p>
                        <h2 class="section-title">My works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!--works-filters-->
                    <div class="works-filters">
                        <ul class="list-inline">
                            <li class="filter" data-filter="all">Everything</li>
                            <li class="filter" data-filter=".photography">Photography</li>
                            <li class="filter" data-filter=".illustrator"> Illustrator</li>
                            <li class="filter" data-filter=".graphic">Graphic Design</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="works-items">
                <div class="row">
                    <!--works-item-->
                    <div class="col-lg-4 col-md-6 mix photography ">
                        <div class="works-item wow customFadeInUp slow">
                            <div class="image">
                                <img src="{{asset('assets/img/works/1.jpg')}}" alt="">
                                <div class="overly">
                                    <div class="info d-flex align-items-center">
                                        <p>Name - photography</p>
                                        <div class="details d-flex align-items-center ml-auto">
                                            <a href="{{asset('assets/img/works/1.jpg')}}" class="view-work">
                                                <i class="fas fa-images"></i>
                                            </a>
                                            <a href="#"><i class="fas fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--works-item-->
                    <div class="col-lg-4 col-md-6 mix illustrator ">
                        <div class="works-item wow customFadeInUp delay-0-2s slow">
                            <div class="image">
                                <img src="{{asset('assets/img/works/2.jpg')}}" alt="">
                                <div class="overly">
                                    <div class="info d-flex align-items-center">
                                        <p >Name - illustrator</p>
                                        <div class="details d-flex align-items-center ml-auto">
                                            <a href="{{asset('assets/img/works/2.jpg')}}" class="view-work">
                                                <i class="fas fa-images"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--works-item-->
                    <div class="col-lg-4 col-md-6 mix graphic ">
                        <div class="works-item wow customFadeInUp delay-0-3s slow">
                            <div class="image">
                                <img src="{{asset('assets/img/works/3.jpg')}}" alt="">
                                <div class="overly">
                                    <div class="info d-flex align-items-center">
                                        <p>Name - Graphic design</p>
                                        <div class="details d-flex align-items-center ml-auto">
                                            <a href="{{asset('assets/img/works/3.jpg')}}" class="view-work">
                                                <i class="fas fa-images"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--works-item-->
                    <div class="col-lg-4 col-md-6 mix photography ">
                        <div class="works-item wow customFadeInUp delay-0-4s slow">
                            <div class="image">
                                <img src="{{asset('assets/img/works/4.jpg')}}" alt="">
                                <div class="overly">
                                    <div class="info d-flex align-items-center">
                                        <p>Name - photography</p>
                                        <div class="details d-flex align-items-center ml-auto">
                                            <a href="{{asset('assets/img/works/4.jpg')}}" class="view-work">
                                                <i class="fas fa-images"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--works-item-->
                    <div class="col-lg-4 col-md-6 mix graphic ">
                        <div class="works-item wow customFadeInUp delay-0-5s slow">
                            <div class="image">
                                <img src="{{asset('assets/img/works/5.jpg')}}" alt="">
                                <div class="overly">
                                    <div class="info d-flex align-items-center">
                                        <p>Name - Graphic design</p>
                                        <div class="details d-flex align-items-center ml-auto">
                                            <a href="{{asset('assets/img/works/5.jpg')}}" class="view-work">
                                                <i class="fas fa-images"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--works-item-->
                    <div class="col-lg-4 col-md-6 mix graphic ">
                        <div class="works-item wow customFadeInUp delay-0-6s slow">
                            <div class="image">
                                <img src="{{asset('assets/img/works/6.jpg')}}" alt="">
                                <div class="overly">
                                    <div class="info d-flex align-items-center">
                                        <p>Name - Graphic design</p>
                                        <div class="details d-flex align-items-center ml-auto">
                                            <a href="{{asset('assets/img/works/6.jpg')}}" class="view-work">
                                                <i class="fas fa-images"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--works-item-->
                    <div class="col-lg-4 col-md-6 mix graphic ">
                        <div class="works-item wow customFadeInUp delay-0-7s slow">
                            <div class="image">
                                <img src="{{asset('assets/img/works/7.jpg')}}" alt="">
                                <div class="overly">
                                    <div class="info d-flex align-items-center">
                                        <p> Name - Graphic design</p>
                                        <div class="details d-flex align-items-center ml-auto">
                                            <a href="{{asset('assets/img/works/7.jpg')}}" class="view-work">
                                                <i class="fas fa-images"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--works-item-->
                    <div class="col-lg-4 col-md-6 mix illustrator ">
                        <div class="works-item wow customFadeInUp delay-0-8s slow">
                            <div class="image">
                                <img src="{{asset('assets/img/works/8.jpg')}}" alt="">
                                <div class="overly">
                                    <div class="info d-flex align-items-center">
                                        <p>Name - illustrator</p>
                                        <div class="details d-flex align-items-center ml-auto">
                                            <a href="{{asset('assets/img/works/8.jpg')}}" class="view-work">
                                                <i class="fas fa-images"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--works-item-->
                    <div class="col-lg-4 col-md-6 mix photography">
                        <div class="works-item wow customFadeInUp delay-0-9s slow">
                            <div class="image">
                                <img src="{{asset('assets/img/works/9.jpg')}}" alt="">
                                <div class="overly">
                                    <div class="info d-flex align-items-center">
                                        <p>Name - photography</p>
                                        <div class="details d-flex align-items-center ml-auto">
                                            <a href="{{asset('assets/img/works/9.jpg')}}" class="view-work">
                                                <i class="fas fa-images"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fas fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
