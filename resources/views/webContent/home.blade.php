@extends('webContent.weblayouts.webHome')

@section('websection')





    <div class="main-logo text-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <a class="logo wow customFadeInUp slow" href="#">{{$herosection_details->name_Symbol}}</a>
                </div>
            </div>
        </div>
    </div>


    <!--Home-->
    <section class="home home-4 d-flex align-items-center">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8">
                    <div class="home-banner text-left wow customFadeInUp delay-0-2s slow">
                        <h6> Hi , There! </h6>
                        <h1 class="cd-headline clip text-left">I Am
                            <br>
                            <span class="cd-words-wrapper base-color">
                                <b class="is-visible">{{$herosection_details->Yourname}}. </b>
                                <b>{{$herosection_details->profession_1}}.</b>
                                <b>{{$herosection_details->profession_2}}.</b>
                            </span>
                        </h1>

                        <ul class="social-icons list-inline">
                            <li><a href="{{$herosection_details->social_1}}"><i class="fab fa-facebook"></i></a></li>

                            <li><a href="{{$herosection_details->social_2}}"><i class="fab fa-twitter"></i></a></li>

                            <li><a href="{{$herosection_details->social_3}}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <a href="{{ route('about') }}" class="btn-custom ">More about me</a>
                    </div>
                </div>
                <div class="col-lg-4" style="background-image: url('{{$authbgimg_path}}');     background-size: contain;
                background-repeat: no-repeat;    background-position: center;">


                </div>

            </div>
        </div>
        <div class="hero" style="background-image: url('{{$bgimg_path}}'); z-index:-1">
          <!-- Other content -->
        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-left">
                        <span class="wow customFadeInUp delay-0-4s slow">©All Rights Reserved.</span>
                    </div>
                </div>
            </div>
        </div>


    </section>


@stop
