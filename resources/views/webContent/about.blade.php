@extends('webContent.weblayouts.webHome')

@section('title','About')
@section('websection')


    <!-- About-->
    <div class="section">
        <div class="container">
            <!--Section title-->
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <p class="section-description bg-base-color">Know About Me</p>
                        <h2 class="section-title">About Me</h2>
                    </div>
                </div>
            </div>
            <!--about-info-->
            <div class="row d-flex align-items-center mb-50 wow customFadeInUp slow">
                <div class="col-lg-7 ">
                    <div class="about-info">
                        <h5>{{$about_details->intro}}</h5>
                        <p>{{$about_details->aboutinfo}}</p>
                        <div class="g-listes">
                            <ul class="liste">
                                <li><span>Name:</span>{{$about_details->Yourname}}</li>
                                <li><span>Phone:</span>{{$about_details->phone_number}}</li>
                                <li><span>Freelancer:</span>{{$about_details->freelancer}}</li>
                            </ul>
                            <ul class="liste">
                                <li><span>Email:</span>{{$about_details->Youremail}}</li>
                                <li><span>Location:</span>{{$about_details->location}}</li>
                                <li><span>Experience:</span>{{$about_details->experience}}</li>
                            </ul>
                        </div>
                        <div class="g-bottom">
                            <a href="{{'downloadCV_image/'. $about_details->downloadCV  }}" class="btn-custom" download="{{$about_details->downloadCV}}">Downland My CV</a>
                            <ul class="social-icons  list-inline">
                                <li><a href="{{$about_details->social_1}}"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="{{$about_details->social_2}}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{$about_details->social_3}}"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-6">
                            <div class="about-box">
                                <h2 class="base-color">120</h2>
                                <p>Projects Complated</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-box">
                                <h2 class="base-color">400</h2>
                                <p>Cups of coffee</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-box">
                                <h2 class="base-color">15</h2>
                                <p>awards won</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-box">
                                <h2 class="base-color">430</h2>
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Work & Eduction-->
            <div class="section-sub-heading">
                <h4 class="section-sub-title"> Work & Eduction</h4>
            </div>
            <div class="row mb-50">
                <div class="col-md-6 wow customFadeInUp  delay-0-2s slow">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="icon"></div>
                            <div class="box">
                                <h5>{{$about_details->work_1}}</h5>
                                <small class="bg-base-color">{{$about_details->work_year_1}}</small>
                                <p>{{$about_details->work_description_1}}</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="icon"></div>
                            <div class="box">
                                <h5>{{$about_details->work_2}}</h5>
                                <small class="bg-base-color">{{$about_details->work_year_2}}</small>
                                <p>{{$about_details->work_description_2}}</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="icon"></div>
                            <div class="box ">
                                <h5>{{$about_details->work_3}}</h5>
                                <small class="bg-base-color">{{$about_details->work_year_3}}</small>
                                <p>{{$about_details->work_description_3}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow customFadeInUp delay-0-4s slow">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="icon"></div>
                            <div class="box ">
                                <h5>{{$about_details->eduction_1}}</h5>
                                <small class="bg-base-color"> {{$about_details->education_year_1}}</small>
                                <p>{{$about_details->education_description_1}}</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="icon"> </div>
                            <div class="box ">
                                <h5>{{$about_details->eduction_2}}</h5>
                                <small class="bg-base-color">{{$about_details->education_year_2}}</small>
                                <p>{{$about_details->education_description_2}}</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="icon"></div>
                            <div class="box">
                                <h5>{{$about_details->eduction_3}}</h5>
                                <small class="bg-base-color"> {{$about_details->education_year_3}}</small>
                                <p>{{$about_details->education_description_3}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Skills-->
            <div class="section-sub-heading">
                <h4 class="section-sub-title"> My Skills</h4>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!--skill-item-->
                    <div class="skill-item">
                        <p>Photoshop</p>
                        <div class="skill-progress">
                            <div class="skill-progress-bar bg-base-color" role="progressbar" aria-valuenow="{{$about_details->photoshop_skill_percent}}"
                                aria-valuemin="0" aria-valuemax="100">
                                <span>{{$about_details->photoshop_skill_percent}}%</span>
                            </div>
                        </div>
                    </div>

                    <!--skill-item-->
                    <div class="skill-item">
                        <p>Illustrator</p>
                        <div class="skill-progress">
                            <div class="skill-progress-bar bg-base-color" role="progressbar" aria-valuenow="{{$about_details->illustrator_skill_percent}}"
                                aria-valuemin="0" aria-valuemax="100">
                                <span>{{$about_details->illustrator_skill_percent}}%</span>
                            </div>
                        </div>
                    </div>

                    <!--skill-item-->
                    <div class="skill-item">
                        <p>Figma </p>
                        <div class="skill-progress">
                            <div class="skill-progress-bar bg-base-color" role="progressbar" aria-valuenow="{{$about_details->figma_skill_percent}}"
                                aria-valuemin="0" aria-valuemax="100">
                                <span>{{$about_details->figma_skill_percent}}%</span>
                            </div>
                        </div>
                    </div>

                    <!--skill-item-->
                    <div class="skill-item">
                        <p>Adobe XD</p>
                        <div class="skill-progress">
                            <div class="skill-progress-bar bg-base-color" role="progressbar" aria-valuenow="{{$about_details->adobeXD_skill_percent}}"
                                aria-valuemin="0" aria-valuemax="100">
                                <span>{{$about_details->adobeXD_skill_percent}}%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!--skill-item-->
                    <div class="skill-item">
                        <p>React</p>
                        <div class="skill-progress">
                            <div class="skill-progress-bar bg-base-color" role="progressbar" aria-valuenow="{{$about_details->react_skill_percent}}"
                                aria-valuemin="0" aria-valuemax="100">
                                <span>{{$about_details->react_skill_percent}}%</span>
                            </div>
                        </div>
                    </div>

                    <!--skill-item-->
                    <div class="skill-item">
                        <p>Javascript</p>
                        <div class="skill-progress">
                            <div class="skill-progress-bar bg-base-color" role="progressbar" aria-valuenow="{{$about_details->javascript_skill_percent}}"
                                aria-valuemin="0" aria-valuemax="100">
                                <span>{{$about_details->javascript_skill_percent}}%</span>
                            </div>
                        </div>
                    </div>

                    <!--skill-item-->
                    <div class="skill-item">
                        <p>CSS </p>
                        <div class="skill-progress">
                            <div class="skill-progress-bar bg-base-color" role="progressbar" aria-valuenow="{{$about_details->css_skill_percent}}"
                                aria-valuemin="0" aria-valuemax="100">
                                <span>{{$about_details->css_skill_percent}}%</span>
                            </div>
                        </div>
                    </div>

                    <!--skill-item-->
                    <div class="skill-item">
                        <p>Jquery</p>
                        <div class="skill-progress">
                            <div class="skill-progress-bar bg-base-color" role="progressbar" aria-valuenow="{{$about_details->jquery_skill_percent}}"
                                aria-valuemin="0" aria-valuemax="100">
                                <span>{{$about_details->jquery_skill_percent}}%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@stop('websection')
