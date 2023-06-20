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
                        <p class="section-description bg-base-color">Checkout Categories</p>
                        <h2 class="section-title">Blog Categories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!--works-filters-->
                    <div class="works-filters">
                        <ul class="list-inline">
                            <li class="filter" data-filter=".Design">Design</li>
                            <li class="filter" data-filter=".Devlopment">Devlopment</li>
                            <li class="filter" data-filter=".Tutorials">Tutorials</li>
                            <li class="filter" data-filter=".Branding">Branding</li>
                            <li class="filter" data-filter=".LifeStyle">LifeStyle</li>
                        </ul>
                    </div>
                </div>
            </div>




            <div class="works-items">
                <div class="row">

                    <div class="col-lg-4 col-md-6 mix Design ">
                        <div class="works-item wow customFadeInUp slow">




                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mix Devlopment ">
                        <div class="works-item wow customFadeInUp slow">




                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mix Tutorials ">
                        <div class="works-item wow customFadeInUp slow">




                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mix Branding ">
                        <div class="works-item wow customFadeInUp slow">




                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 mix LifeStyle ">
                        <div class="works-item wow customFadeInUp slow">




                        </div>
                    </div>





                </div>
            </div>

        </div>
    </div>

@stop
