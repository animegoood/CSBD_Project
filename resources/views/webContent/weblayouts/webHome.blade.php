<!doctype html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="assets/img/favicon.png">

    <!-- Title -->
    <title> @yield('title') </title>

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/elegant-font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.animatedheadline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">


    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    {{-- font awsom icon --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colors/color-4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">


</head>

<body>



    <!--Menu-->
    <div class="main-menu fixed-top">
        <nav class="nav-menu">
            <ul class="menu" id="menu">
                <li>
                    <a  class="{{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a class="{{ request()->is('about')? 'active' : '' }}"  href="{{ route('about') }}">About</a>
                </li>
                <li>
                    <a class="{{ request()->is('services')? 'active' : '' }}"  href="{{ route('services') }}">Services</a>
                </li>
                <li>
                    <a class="{{ request()->is('works')? 'active' : '' }}"  href="{{ route('works') }}">Works</a>
                </li>
                <li>

                    <a class="{{ request()->is('blog')? 'active' : '' }}"  href="{{ route('blog') }}">Blog</a>
                </li>
                <li>
                  <a class="{{ request()->is('category')? 'active' : '' }}"  href="{{ route('category') }}">Blog Categoris</a>
                </li>
                <li>
                    <a class="{{ request()->is('contact')? 'active' : '' }}"  href="{{ route('contact') }}">Contact</a>
                </li>
                <li>
                    <a class="{{ request()->is('login')? 'active' : '' }}"  href="{{ route('login') }}">login</a>
                </li>
                <li>
                    <a class="{{ request()->is('register')? 'active' : '' }}"  href="{{ route('register') }}">register</a>
                </li>

            </ul>
        </nav>
        <!--hamburger-menu-->
        <a class="hamburger-menu js-toggle-menu" href="#">
            <div class="g-lines">
                <span class="line line-dark"></span>
                <span class="line line-dark"></span>
                <span class="line line-dark"></span>
            </div>
        </a>
    </div>



    <section>
        @yield('websection')
    </section>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/webJs/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/webJs/popper.min.js') }}"></script>
    <script src="{{ asset('assets/webJs/bootstrap.min.js') }}"></script>

    <!-- JS Plugins  -->
    <script src="{{ asset('assets/webJs/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/webJs/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/webJs/jquery.mixitup.js') }}"></script>
    <script src="{{ asset('assets/webJs/wow.min.js') }}"></script>
    <script src="{{ asset('assets/webJs/ajax-contact.js') }}"></script>
    <script src="{{ asset('assets/webJs/jquery.animatedheadline.min.js') }}"></script>
    <script src="{{ asset('assets/webJs/main.js') }}"></script>

    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])

</body>

</html>
