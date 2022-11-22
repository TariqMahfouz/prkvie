<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mohamed essa">
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" type="text/css">
    <title>Landing Prk Vie</title>

</head>

<body class="has-loading-screen links-hover-effect" data-spy="scroll" data-target=".navigation">

<div class="page-wrapper" id="page-top">
    <header id="page-header">
        <nav class="navigation background-is-dark">
            <div class="container pt-2">
                <div class="wrapper">
                    <div class="left">
                        <a href="index-v1.html" class="brand"><img height="60px" src="{{ asset('assets/img/logo.png')}}" alt=""></a>
                    </div>
                    <!--end left-->
                    <div class="right">
                        <ul class="nav navigation-links animate justify-content-end">
                            <li><a href="#page-top">Home</a></li>
                            <li><a href="#project">Project</a></li>
                            <li><a href="#developer">Developer</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                        <div class="nav-btn">
                            <i class="fa fa-bars fa-lg"></i>
                        </div>
                    </div>
                    <!--end right-->
                </div>
            </div>
            <!--end container-->
        </nav>
        <!--end navigation-->
        <div class="hero-section background-is-dark">
            <div class="wrapper">
                <div class="hero-title">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 animate">
                                <h1 class="text_orange pt-5 absolute_text display-4 fw-bold align-bottom">New Cairo, <br>
                                Prk Vie is here!</h1>
                            </div>
                            <!--end col-md-7-->
                            <div class="col-md-5 animate mt-lg-5">
                                {!! Form::open(['route' => ['submit.inquery'] ,'class' => 'form-has-background-padding my-5', 'id' => 'form-hero', 'data-aos'=>"fade-up", 'data-aos-delay'=>"100", 'data-aos-duration'=>"1000"]) !!}
                                
                                    <h3>Inquire Now</h3>
                                    <div class="form-group">
                                        <label for="fullname">Full Name*</label>
                                        <input type="text" class="form-control" required id="fullname" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number*</label>
                                        <input type="tel" class="form-control" required id="phone" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address*</label>
                                        <input type="email" class="form-control" required id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="unit">Unit Type</label>
                                        <input type="text" class="form-control" id="unit" name="unit_type">
                                    </div>
                                    <div class="form-group">
                                        <label for="time">Preferred Timing</label>
                                        <input type="text" class="form-control" id="time" name="prefered_time">
                                    </div>
                                    <input type="submit" class="btn btn-default btn-framed btn-rounded mt-3" value="Send"/>
                                {!! Form::close() !!}
                            </div>
                            <!--end col-md-5-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </div>
                <!--end hero-title-->
            </div>
            <!--end wrapper-->
            <div class="owl-carousel" data-owl-dots="0" data-owl-nav="1" data-owl-autoplay="1" data-owl-loop="1" data-owl-fadeout="1">
                @foreach($sliderlImages as $image)
                    <div class="hero-slide">
                        <div class="bg-transfer"><img src="{{ getImagePath($image->image) }}" alt=""></div>
                    </div>
                @endforeach
            </div>
            <!--end owl-carousel-->
        </div>
        <!--end hero-section-->
    </header>
    <!--end page-header-->

    <div>
        <div class="second_section">
            <div class="overlay py-5">
                <div class="container py-3">
                    <div class="row text-center pt-lg-3">
                        <div class="col-lg-4 col-sm-6">
                            <div class="feature has-icon pe-4 pe-lg-1" data-scroll-reveal="enter left and move 20px">
                                <!--end icon-->
                                <div class="description">
                                    <h3 class="text_orange">F&B Indoor & Outdoor Areas</h3>
                                    <p class="text-white">
                                        Savor your taste of choice whenever you would like.
                                        Start your day with that refreshing breackfast. Take
                                        some time off shipping on your favourite beverage.
                                        Prk Vie is where you can indulge in exquisite diners
                                        or quick brunch, in an atmosphere that just goes 
                                        along with your mood.
                                    </p>
                                </div>
                                <!--end description-->
                            </div>
                            <!--end feature-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-lg-4 col-sm-6">
                            <div class="feature has-icon pe-4 pe-lg-1" data-scroll-reveal="enter bottom and move 20px">
                                <!--end icon-->
                                <div class="description">
                                    <h3 class="text_orange">Office Spaces & Standalone adminstrative buildings</h3>
                                    <p class="text-white">
                                        Already got your business going and would like 
                                        to relocate? Been considering starting your own?
                                        Prk Via has got different types of <br>
                                        offices that meet your needs, speaking of design
                                         and space. As For their location, they promise 
                                         the professional character aspire for.
                                    </p>
                                </div>
                                <!--end description-->
                            </div>
                            <!--end feature-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-lg-4 col-sm-6">
                            <div class="feature has-icon pe-4 pe-lg-1" data-scroll-reveal="enter right and move 20px">
                                <!--end icon-->
                                <div class="description">
                                    <h3 class="text_orange">Health and beauty</h3>
                                    <p class="text-white">
                                        Relax your soul. Prk Vie welcomes
                                        you to the place that brings you the ultimate care you aspire for.
                                        It is like you let go of everything, at a specially private
                                        resort... And when it comes to feeling your best self,
                                        revive your mood with Prk Vie's.
                                    </p>
                                </div>
                                <!--end description-->
                            </div>
                            <!--end feature-->
                        </div>
                        <!--end col-md-4-->
                    </div>
                    <!--end row-->
                </div>
            </div>
            <!--end background-wrapper-->
        </div>
        <!--end block-->
        <div class="bg-white pt-5" id="project">
            <div class="container aboutUs pt-lg-4">
                <div class="d-md-flex justify-content-center">
                    <div class="bgYellowContent" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <img src="{{ asset('assets/img/bgyellow.png')}}" class="img-fluid">
                        <div class="content">
                            <h1 class="display-6 fw-bold mb-0">About the project</h1>
                            <h3 class="pe-lg-3 text-black pt-2 text-lg-end fw-bold">Unwind & Restart</h3>
                            <p class="text-black fw-bold pt-2">
                                {{ $settings['project_content'] }}    
                            </p>
                        </div>
                    </div>
                    <div class="absoluteImage" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <img src="{{ asset('assets/img/about.png')}}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!-- Map image -->
        <div class="block bg-white pb-0">
            <div class="container text-center">
                <h2 class="display-6">Cherry picked location</h2>
                <img src="{{ asset('assets/img/map.png')}}" class="img-fluid" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" alt="">
            </div>
        </div>
        <!-- Gallery -->
        <div class="block bg-white" id="gallery" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="container">
                <h2>Gallery.</h2>
            </div>
            <div class="owl-carousel big-gallery" data-owl-items="3" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="0" data-owl-center="1" data-owl-loop="1" data-owl-nav-container="#big-gallery-nav">
                @foreach($carouselImages as $image)
                <div class="slide">
                    <div class="container">
                        <img src="{{ getImagePath($image->image) }}" alt="">
                        <div class="description">
                            <h3></h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                @endforeach
            </div>
            <!--end big-gallery-->
            <div class="container">
                <div class="owl-nav-wrapper">
                    <div class="owl-nav" id="big-gallery-nav"></div>
                </div>
                <!--end owl-nav-wrapper-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->
        <div class="block bg-white" id="developer">
            <div class="container">
                <div class="contact" data-scroll-reveal="enter bottom and move 20px">
                    <div class="row justify-content-between">
                        <div class="col-lg-4">
                            <h2 class="fw-bold mb-5">More details</h2>
                            <img src="{{ asset('assets/img/logo_1.png')}}" class="img-fluid">
                        </div>
                        <div class="col-lg-7">
                            <h3 class="fw-bold pt-lg-5">Upwyde Developments</h3>
                            <p class="">
                                {{ $settings['about_us'] }}
                            </p>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end contact map-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <div class="block bg-white">
            <div class="container">
                <div class="contact map">
                    <div class="row">
                        <div class="col-12"  data-scroll-reveal="enter bottom and move 20px">
                            <h3>Our Location</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.7855216585995!2d{{ $settings['lon'] }}!3d{{ $settings['lat'] }}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145823f76cec181b%3A0x1bd7cdd2d77645cf!2sUpwyde%20Developments!5e0!3m2!1sen!2suk!4v1668694764667!5m2!1sen!2suk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end contact map-->
            </div>
            <!--end container-->
        </div>
        <!--end container-->

        <!--end block-->


    </div>
    <!--end page-content-->

    <footer class="footer">
        <div class="overlay pt-5">
            <div class="container" id="contact">
                <a href="#" class="brand"><img height="50px" src="{{ asset('assets/img/logo.png')}}" alt=""></a>
                <h2 class="fw-bold pt-5">Contact.</h2>
                <!--end brand-->
                <div class="row">
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Address</h3>
                                <h6 class="fw-bold">Upwyde Developments</h6>
                                <h6 class="font-size-14">HQ: {{ $settings['hq_address'] }}</h6>
                                <h6 class="font-size-14">Branch: {{ $settings['branch_address'] }}</h6>
                            </div>
                            <div class="col-md-6 social_icons">
                                <h3>Social</h3>
                                <h6><a target="_blank" href="{{ $settings['facebook'] }}"><img src="{{ asset('assets/img/face.png')}}">FACEBOOK</a></h6>
                                <h6><a target="_blank" href="{{ $settings['tiktok'] }}"><img src="{{ asset('assets/img/ticktock.png')}}">TIKTOK</a></h6>
                                <h6><a target="_blank" href="{{ $settings['instagram'] }}"><img src="{{ asset('assets/img/insta.png')}}">INSTAGRAM</a></h6>
                                <h6><a target="_blank" href="{{ $settings['youtube'] }}"><img src="{{ asset('assets/img/youtube.png')}}">YOUTUBE</a></h6>
                            </div>
                        </div>
                    </div>
                    <!--end col-md-4-->
                </div>
                <div class="row justify-content-between pb-4">
                    <div class="col-lg-5 col-md-6 pt-md-5">
                        <h6 class="d-none d-md-block">(C) Upwyde Developments - 2021 All rights Reserved</h6>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-data text-md-end">
                            <figure class="h4">Call Us : 15722</figure>
                            <a class="h4" href="mailto:hello@upwyde.com">hello@Upwyde.com</a>
                        </div>
                        <h6 class="d-md-none mb-0 h5 pt-4 font-size-14">(C) Upwyde Developments - 2021 All rights Reserved</h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end page-footer-->

</div>
<!--end page-wrapper-->

<!--end modal-->

<!--end outer-wrapper-->
<script type="text/javascript" src="{{ asset('assets/js/jquery-2.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/scrollReveal.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/readmore.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/pace.min.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/custom.js')}}"></script>


</body>
