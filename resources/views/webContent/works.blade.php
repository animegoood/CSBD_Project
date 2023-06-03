@extends('webContent.weblayouts.webHome')

@section('title', 'Works')

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



                    @foreach ($work_details as $work_detail)
                    <!--works-item-->
                    <div class="col-lg-4 col-md-6 mix photography ">
                        <div class="works-item wow customFadeInUp slow">
                            <div class="image">
                                    <img src="{{ asset('photography_works/' . $work_detail->photography) }}"
                                        alt="">
                                    <div class="overly">
                                        <div class="info d-flex align-items-center">
                                            <p>{{ $work_detail->photography_name }}- photography</p>
                                            <div class="details d-flex align-items-center ml-auto">
                                                <a href="{{ asset('photography_works/' . $work_detail->photography) }}"
                                                    class="view-work">
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
                                <img src="{{ asset('illustrator_works/' . $work_detail->illustrator) }}" alt="">
                                <div class="overly">
                                    <div class="info d-flex align-items-center">
                                        <p>{{$work_detail->illustrator_name}}- illustrator</p>
                                        <div class="details d-flex align-items-center ml-auto">
                                            <a href="{{ asset('illustrator_works/' . $work_detail->illustrator) }}" class="view-work">
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
                                <img src= "{{ asset('graphicDesign_works/'.$work_detail->graphicDesign)}}" alt="">
                                <div class="overly">
                                    <div class="info d-flex align-items-center">
                                        <p>Name - Graphic design</p>
                                        <div class="details d-flex align-items-center ml-auto">
                                            <a href="{{ asset('graphicDesign_works/'.$work_detail->graphicDesign)}}" class="view-work">
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


                    @endforeach

                </div>
            </div>

        </div>
    </div>

@stop
