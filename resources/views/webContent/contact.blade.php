@extends('webContent.weblayouts.webHome')
@section('title','Contact')

@section('websection')

    <!-- contact-->
    <div class="section contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--Section title-->
                    <div class="section-heading">
                        <p class="section-description bg-base-color">Feel free to conatct me</p>
                        <h2 class="section-title"> Contact Me</h2>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-lg-3 col-md-6">
                    <!--phone-->
                    <div class="contact-item ">
                        <p><i class="fab fa-whatsapp base-color"></i> Phone: </p>
                        <p><a href="tel:{{$contact_details->phone_number}}">{{$contact_details->phone_number}}</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!--Email-->
                    <div class="contact-item">
                        <p><i class="fas fa-envelope base-color"></i> Email: </p>
                        <p> <a href="mailto:{{$contact_details->Youremail}}">{{$contact_details->Youremail}}</a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!--Adress-->
                    <div class="contact-item">
                        <p><i class="fas fa-map-marker-alt base-color"></i> Adress: </p>
                        <p>{{$contact_details->location}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <!--social-icons-->
                    <div class="contact-item">
                        <p><i class="fas fa-share-alt base-color"></i>Socials media: </p>
                        <ul class="social-icons list-inline">
                            <li><a href="{{$contact_details->social_1}}"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="{{$contact_details->social_2}}"> <i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{$contact_details->social_3}}"> <i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mb-30">
                <!--form-->
                <div class="col-lg-7 wow customFadeInUp slow">
                    <form action="{{ route('contact_mail') }}" class="contact_form" method="POST" id="main_contact_form">
                      @csrf

                
                        <div class="form-group">
                            <input type="text" name="send_message_name" id="send_message_name" class="form-control" placeholder="Name"
                                >
                        </div>

                        <div class="form-group">
                            <input type="email" name="send_message_email" id="email" class="form-control" placeholder="Email"
                                >
                        </div>

                        <div class="form-group">
                            <input type="text" name="send_message_subject" id="subject" class="form-control" placeholder="Subject"
                                >
                        </div>

                        <div class="form-group">
                            <input name="send_message_message" id="message" cols="30" rows="5" class="form-control" placeholder="Message"
                                >
                        </div>

                        <button type="submit" name="submit" class="btn-custom">Send Message</button>
                    </form>
                </div>
                <!--google-map-->
                <div class="col-lg-5 wow customFadeInUp delay-0-4s slow">
                    <div class="google-map mb-30">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3104.5761533072873!2d-78.19644468515456!3d38.91080675375955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b5c5dc680d0b2b%3A0x1e9ff0b6bb7a2f87!2s1000%20Proctor%20Ln%2C%20Front%20Royal%2C%20VA%2022630%2C%20%C3%89tats-Unis!5e0!3m2!1sfr!2sma!4v1578068093888!5m2!1sfr!2sma"
                            allowfullscreen="">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
