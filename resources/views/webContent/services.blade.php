@extends('webContent.weblayouts.webHome')

@section('title', 'Services')

@section('websection')
    <!--Servives section-->

    {{-- {{$service_detail->id}} --}}

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <p class="section-description bg-base-color">Services i offer to my clients</p>
                        <h2 class="section-title">My Services</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-20 mt-40">

                <!--service-item-->


                @foreach ($service_details as $service_detail)
                    <div class="col-lg-4 col-md-6 wow customFadeInUp delay-0-3s slow">
                        <div class="service-item">
                            <div class="icon bg-base-color">
                                <i class="{{ $service_detail->service_icon }}"></i>

                            </div>
                            <div class="content">
                                <h5>{{ $service_detail->service_name }}</h5>
                                <p>{{ htmlspecialchars($service_detail->service_description) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            <!--Testimonials-->
            <div class="section-sub-heading">
                <h4 class="section-sub-title">Testimonials</h4>
            </div>
            <div class="row  testimonials mb-50">
                <div class="col-lg-12">
                    <div class="owl-carousel">





                        @foreach ($service_details as $service_detail)
                            <!--testimonial-item-->
                            <div class="testimonials-item">
                                <div class="image">
                                    <img src="{{ asset('Testimonials_image/' . $service_detail->testimonials_image) }}"
                                        alt="">
                                </div>
                                <h6>{{ $service_detail->testimonials_name }}</h6>
                                <p class="job">{{ $service_detail->testimonials_job }}</p>

                                <p>{{ htmlspecialchars($service_detail->testimonials_description) }}</p>
                                <div class="icon bg-base-color">
                                    <span class="icon_quotations"></span>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <!--Pricing plans-->
            <div class="section-sub-heading">
                <h4 class="section-sub-title"> Choose a Plan</h4>
            </div>

            <div class="row mb-50">

                @foreach ($service_details as $service_detail)
                    <!--pricing-item-->
                    <div class="col-lg-4 wow customFadeInUp delay-0-2s slow">
                        <div class="pricing-item">
                            <div class="content">
                                <h5>{{ $service_detail->pricing_name }}</h5>
                                <div class="price">
                                    <h3>{{ $service_detail->pricing }}
                                        <span>{{ $service_detail->pricing_month }}</span>
                                    </h3>
                                </div>
                                <ul>
                                    <li>{{ $service_detail->pricing_services_1 }}</li>
                                    <li>{{ $service_detail->pricing_services_2 }}</li>
                                    <li>{{ $service_detail->pricing_services_3 }} </li>
                                    <li>{{ $service_detail->pricing_services_4 }}</li>
                                    <li>{{ $service_detail->pricing_services_5 }}</li>
                                </ul>
                                <a href="#" class="btn-custom">Get {{ $service_detail->pricing_name }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!--Clients-->
            <div class="section-sub-heading">
                <h4 class="section-sub-title">Our Clients</h4>
            </div>
            <div class="row">

                @foreach ($service_details as $service_detail)
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <div class="clients-item">
                            <img src="{{ asset('sponser_img/' . $service_detail->sponser_images) }}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>



@stop
