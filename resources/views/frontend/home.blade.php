<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Bidhannagar Police</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
</head>

<body>
    <main>
        <div class="main_menu_hdr">
            <div class="container-fluid">
                <div class="main_menu">
                    <div class="navigation navbar">
                        <div class="left_top">
                            <div class="logo">
                                <a href="javascript:void(0);" class="">
                                    <img src="{{ asset('assets/images/Bidhannagar_Police_logo.png') }}"
                                        alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="text-center ps_add">
                            <img src="assets/images/ashok.jpg" alt="" class="ashok" />
                            <h3>Electronics Complex Police Station</h3>
                            <h4>Bidhannagar Police Commissionerate</h4>
                        </div>
                        <div class="left_top">
                            <div class="logo">
                                <a href="index.html" class="">
                                    <img src="{{ asset('assets/images/Bidhannagar_Police_logo.png') }}"
                                        alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="about_sec">
            <div class="container-fluid">
                <div class="date_text" id="date-not">
                    <img src="assets/images/calender.png" alt="" />
                    {{ date('d.m.Y', strtotime(now())) }}
                </div>
                <div id="all-deails">
                    @if (count($users) > 0)
                        @if (count($users) <= 9)
                            <div id="carouselExample1" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    {{-- chunk 9 --}}
                                    @foreach ($users->chunk(9) as $key => $chunk)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }} "
                                            data-bs-interval="{{ isset($slider_times[0]['duration']) ? $slider_times[0]['duration'] * 1000 : 10000 }}"
                                            style="width: 100%;
                                            border: 1px solid #2d2e81;
                                            padding: 20px 20px 0 20px;
                                            border-radius: 15px;
                                            margin-bottom: 20px;">
                                            <div class="row align-items-center">
                                                @foreach ($chunk as $user)
                                                    <div class="col-lg-4">
                                                        <div class="thumb_text">
                                                            <div class="row align-items-center">
                                                                <div class="col-lg-5">
                                                                    <div class="img_part">
                                                                        <div class="small_img">
                                                                            @if ($user->profile_picture)
                                                                                <img src="{{ Storage::url($user->profile_picture) }}"
                                                                                    alt="" />
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7">
                                                                    <div class="about_text">
                                                                        <h5>Name :- {{ $user->name }}</h5>
                                                                        <p>Case No :- {{ $user->case_no }}</p>
                                                                        <p>Date :-
                                                                            {{ $user->arrest_date ? date('d.m.Y', strtotime($user->arrest_date)) : '' }}
                                                                        </p>
                                                                        <p>Under Section :- {{ $user->under_section }}
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="carousel-item" data-bs-interval="0" style="display: none; border:none;">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4">
                                                <div class="thumb_text">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-7">
                                                            <div class="about_text">
                                                                <h5>Name :- Lorem ipsum dolor</h5>
                                                                <p>Case No :- 2861</p>
                                                                <p>Date :- 02.07.2024</p>
                                                                <p>Under Section :- 261, 536, 333</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="img_part">
                                                                <div class="small_img">
                                                                    <img src="assets/images/pexels.jpg"
                                                                        alt="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="thumb_text">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-7">
                                                            <div class="about_text">
                                                                <h5>Name :- Lorem ipsum dolor</h5>
                                                                <p>Case No :- 2861</p>
                                                                <p>Date :- 02.07.2024</p>
                                                                <p>Under Section :- 261, 536, 333</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="img_part">
                                                                <div class="small_img">
                                                                    <img src="assets/images/pexels.jpg"
                                                                        alt="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="thumb_text">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-7">
                                                            <div class="about_text">
                                                                <h5>Name :- Lorem ipsum dolor</h5>
                                                                <p>Case No :- 2861</p>
                                                                <p>Date :- 02.07.2024</p>
                                                                <p>Under Section :- 261, 536, 333</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="img_part">
                                                                <div class="small_img">
                                                                    <img src="assets/images/pexels.jpg"
                                                                        alt="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="thumb_text">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-7">
                                                            <div class="about_text">
                                                                <h5>Name :- Lorem ipsum dolor</h5>
                                                                <p>Case No :- 2861</p>
                                                                <p>Date :- 02.07.2024</p>
                                                                <p>Under Section :- 261, 536, 333</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="img_part">
                                                                <div class="small_img">
                                                                    <img src="assets/images/pexels.jpg"
                                                                        alt="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="thumb_text">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-7">
                                                            <div class="about_text">
                                                                <h5>Name :- Lorem ipsum dolor</h5>
                                                                <p>Case No :- 2861</p>
                                                                <p>Date :- 02.07.2024</p>
                                                                <p>Under Section :- 261, 536, 333</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="img_part">
                                                                <div class="small_img">
                                                                    <img src="assets/images/pexels.jpg"
                                                                        alt="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="thumb_text">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-7">
                                                            <div class="about_text">
                                                                <h5>Name :- Lorem ipsum dolor</h5>
                                                                <p>Case No :- 2861</p>
                                                                <p>Date :- 02.07.2024</p>
                                                                <p>Under Section :- 261, 536, 333</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="img_part">
                                                                <div class="small_img">
                                                                    <img src="assets/images/pexels.jpg"
                                                                        alt="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="thumb_text">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-7">
                                                            <div class="about_text">
                                                                <h5>Name :- Lorem ipsum dolor</h5>
                                                                <p>Case No :- 2861</p>
                                                                <p>Date :- 02.07.2024</p>
                                                                <p>Under Section :- 261, 536, 333</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="img_part">
                                                                <div class="small_img">
                                                                    <img src="assets/images/pexels.jpg"
                                                                        alt="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="thumb_text">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-7">
                                                            <div class="about_text">
                                                                <h5>Name :- Lorem ipsum dolor</h5>
                                                                <p>Case No :- 2861</p>
                                                                <p>Date :- 02.07.2024</p>
                                                                <p>Under Section :- 261, 536, 333</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="img_part">
                                                                <div class="small_img">
                                                                    <img src="assets/images/pexels.jpg"
                                                                        alt="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="thumb_text">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-7">
                                                            <div class="about_text">
                                                                <h5>Name :- Lorem ipsum dolor</h5>
                                                                <p>Case No :- 2861</p>
                                                                <p>Date :- 02.07.2024</p>
                                                                <p>Under Section :- 261, 536, 333</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="img_part">
                                                                <div class="small_img">
                                                                    <img src="assets/images/pexels.jpg"
                                                                        alt="" />
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
                        @else
                            <div id="carouselExample1" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    {{-- chunk 9 --}}
                                    @foreach ($users->chunk(9) as $key => $chunk)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                            data-bs-interval="{{ isset($slider_times[0]['duration']) ? $slider_times[0]['duration'] * 1000 : 10000 }}"
                                            style="    width: 100%;
                                            border: 1px solid #2d2e81;
                                            padding: 20px 20px 0 20px;
                                            border-radius: 15px;
                                            margin-bottom: 20px;">
                                            <div class="row align-items-center">
                                                @foreach ($chunk as $user)
                                                    <div class="col-lg-4">
                                                        <div class="thumb_text">
                                                            <div class="row align-items-center">
                                                                <div class="col-lg-5">
                                                                    <div class="img_part">
                                                                        <div class="small_img">
                                                                            @if ($user->profile_picture)
                                                                                <img src="{{ Storage::url($user->profile_picture) }}"
                                                                                    alt="" />
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-7">
                                                                    <div class="about_text">
                                                                        <h5>Name :- {{ $user->name }}</h5>
                                                                        <p>Case No :- {{ $user->case_no }}</p>
                                                                        <p>Date :-
                                                                            {{ $user->arrest_date ? date('d.m.Y', strtotime($user->arrest_date)) : '' }}
                                                                        </p>
                                                                        <p>Under Section :- {{ $user->under_section }}
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                    @endif
                </div>
                <div class=" mt-4" id="one-details" style="display: none">
                    @if (count($users) > 0)

                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @if (count($users) <= 1)
                                    @foreach ($users as $key => $user)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                            style="width: 100%;
                                            border: 1px solid #2d2e81;
                                            padding: 20px 20px 0 20px;
                                            border-radius: 15px;
                                            margin-bottom: 20px;"
                                            data-bs-interval="{{ isset($slider_times[1]['duration']) ? $slider_times[1]['duration'] * 1000 : 10000 }}">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12">
                                                    <div class="thumb_text">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-6">
                                                                <div class="img_part">
                                                                    <div class="big_img">
                                                                        @if ($user->profile_picture)
                                                                            <img src="{{ Storage::url($user->profile_picture) }}"
                                                                                alt="" />
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="about_text_inr heading_hp text_white">
                                                                    <h2>Name :- {{ $user->name }}</h2>
                                                                    <p><span>Case No :-</span> {{ $user->case_no }}</p>
                                                                    <p><span>Date :-</span>
                                                                        {{ $user->arrest_date ? date('d.m.Y', strtotime($user->arrest_date)) : '' }}
                                                                    </p>
                                                                    <p><span>Under Section :-</span>
                                                                        {{ $user->under_section }}</p>
                                                                    <p><span>Address :-</span> {{ $user->address }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="carousel-item" data-bs-interval="0" style="display:none;">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12">
                                                <div class="thumb_text">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <div class="img_part">
                                                                <div class="big_img">
                                                                    <img src="assets/images/pexels.jpg"
                                                                        alt="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="about_text_inr heading_hp text_white">
                                                                <h2>Name :- Lorem ipsum dolor</h2>
                                                                <p><span>Case No :-</span> 2861</p>
                                                                <p><span>Date :-</span> 02.07.2024</p>
                                                                <p><span>Under Section :-</span> 261, 536, 333</p>
                                                                <p><span>Address :-</span> DN - 57, Salt Lake Bypass, DN
                                                                    Block, Sector V, Bidhannagar,
                                                                    Kolkata, West Bengal 700091</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    @foreach ($users as $key => $user)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                            style="width: 100%;
                                            border: 1px solid #2d2e81;
                                            padding: 20px 20px 0 20px;
                                            border-radius: 15px;
                                            margin-bottom: 20px;"
                                            data-bs-interval="{{ isset($slider_times[1]['duration']) ? $slider_times[1]['duration'] * 1000 : 10000 }}">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12">
                                                    <div class="thumb_text">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-6">
                                                                <div class="img_part">
                                                                    <div class="big_img">
                                                                        @if ($user->profile_picture)
                                                                            <img src="{{ Storage::url($user->profile_picture) }}"
                                                                                alt="" />
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="about_text_inr heading_hp text_white">
                                                                    <h2>Name :- {{ $user->name }}</h2>
                                                                    <p><span>Case No :-</span> {{ $user->case_no }}</p>
                                                                    <p><span>Date :-</span>
                                                                        {{ $user->arrest_date ? date('d.m.Y', strtotime($user->arrest_date)) : '' }}
                                                                    </p>
                                                                    <p><span>Under Section :-</span>
                                                                        {{ $user->under_section }}</p>
                                                                    <p><span>Address :-</span> {{ $user->address }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @endif

                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
        <input type="hidden" id="getval" value="1">
        <footer class="footer_sec">
            <p class="copy_right">Developed by <a href="">Excellis IT.</a></p>
        </footer>
    </main>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
<script>
    // on bootstrap slider slid event

    $(document).ready(function() {

        @if (count($users) <= 9)
            $('#carouselExample1').on('slid.bs.carousel', function() {
                if ($('#carouselExample1 .carousel-inner .carousel-item:last').hasClass('active')) {
                    $('#one-details').show();
                    $('#date-not').hide();
                    $('#all-deails').hide();
                    // remove the active class from the last slide
                    $('#carouselExample1 .carousel-inner .carousel-item:last').removeClass(
                        'active');
                    // add the active class to the first slide
                    $('#carouselExample .carousel-inner .carousel-item:first').addClass(
                        'active');
                }
            });
            @if (count($users) <= 1)
                $('#carouselExample').on('slid.bs.carousel', function() {
                    if ($('#carouselExample .carousel-inner .carousel-item:last').hasClass('active')) {
                        $('#one-details').hide();
                        $('#date-not').show();
                        $('#all-deails').show();
                        // remove the active class from the last slide
                        $('#carouselExample .carousel-inner .carousel-item:last').removeClass(
                            'active');
                        // add the active class to the first slide
                        $('#carouselExample1 .carousel-inner .carousel-item:first').addClass(
                            'active');
                    }
                });
            @else
                $('#carouselExample').on('slid.bs.carousel', function() {
                    if ($('#carouselExample .carousel-inner .carousel-item:last').hasClass('active')) {
                        setTimeout(() => {
                                $('#one-details').hide();
                                $('#date-not').show();
                                $('#all-deails').show();
                                // remove the active class from the last slide
                                $('#carouselExample .carousel-inner .carousel-item:last')
                                    .removeClass(
                                        'active');
                                // add the active class to the first slide
                                $('#carouselExample1 .carousel-inner .carousel-item:first')
                                    .addClass(
                                        'active');
                            },
                            {{ isset($slider_times[1]['duration']) ? $slider_times[1]['duration'] * 1000 - 600 : 3000 }}
                        );
                    }
                });
            @endif
        @else
            $('#carouselExample1').on('slid.bs.carousel', function() {
                if ($('#carouselExample1 .carousel-inner .carousel-item:last').hasClass('active')) {
                    setTimeout(() => {
                            $('#one-details').show();
                            $('#date-not').hide();
                            $('#all-deails').hide();
                            // remove the active class from the last slide
                            $('#carouselExample1 .carousel-inner .carousel-item:last').removeClass(
                                'active');
                            // add the active class to the first slide
                            $('#carouselExample .carousel-inner .carousel-item:first').addClass(
                                'active');
                        },
                        {{ isset($slider_times[0]['duration']) ? $slider_times[0]['duration'] * 1000 - 600 : 3000 }}
                    );
                }
            });
            $('#carouselExample').on('slid.bs.carousel', function() {
                if ($('#carouselExample .carousel-inner .carousel-item:last').hasClass('active')) {
                    setTimeout(() => {
                            $('#one-details').hide();
                            $('#date-not').show();
                            $('#all-deails').show();
                            // remove the active class from the last slide
                            $('#carouselExample .carousel-inner .carousel-item:last').removeClass(
                                'active');
                            // add the active class to the first slide
                            $('#carouselExample1 .carousel-inner .carousel-item:first').addClass(
                                'active');
                        },
                        {{ isset($slider_times[1]['duration']) ? $slider_times[1]['duration'] * 1000 - 600 : 3000 }}
                    );
                }
            });
        @endif
    });
    /*setInterval(openSlider);
    function openSlider() {
        if($("#getval").val() == 1) {



        // Get the carousel element
        var $carousel = $('#carouselExample1');
        // Get all carousel items
        var $carouselItems = $carousel.find('.carousel-item');

        // Get total number of slides
        var totalSlides = $carouselItems.length;

        // Get the index of the active slide
        var activeIndex = $carousel.find('.carousel-item.active').index();

        // Calculate the correct active slide index (Bootstrap uses 0-based index)
        var activeSlide = activeIndex + 1;

        // Alert the total count and the correct slide number
        if(totalSlides == activeSlide) {
            setInterval(showSecondSlider, {{ $slider_times[0]['duration'] * 1000 - 600 }});
        }
    }
    }

function showSecondSlider() {
    $("#getval").val(2);
    $("#all-deails").hide();
    $("#one-details").show();

    if($("#getval").val() == 2) {
    var $carousel = $('#carouselExample');
    // Get all carousel items
    var $carouselItems = $carousel.find('.carousel-item');

    // Get total number of slides
    var totalSlides = $carouselItems.length;

    // Get the index of the active slide
    var activeIndex = $carousel.find('.carousel-item.active').index();

    // Calculate the correct active slide index (Bootstrap uses 0-based index)
    var activeSlide = activeIndex + 1;

    // Alert the total count and the correct slide number
    if(totalSlides == activeSlide) {
        setInterval(showFirstSlider, {{ $slider_times[1]['duration'] * 1000 - 600 }});
    }
}
}

function showFirstSlider() {
    $("#getval").val(1);
    $("#one-details").show();
    $("#all-deails").show();
    if($("#getval").val() == 1) {



// Get the carousel element
var $carousel = $('#carouselExample1');
// Get all carousel items
var $carouselItems = $carousel.find('.carousel-item');

// Get total number of slides
var totalSlides = $carouselItems.length;

// Get the index of the active slide
var activeIndex = $carousel.find('.carousel-item.active').index();

// Calculate the correct active slide index (Bootstrap uses 0-based index)
var activeSlide = activeIndex + 1;

// Alert the total count and the correct slide number
if(totalSlides == activeSlide) {
    setInterval(showSecondSlider, {{ $slider_times[0]['duration'] * 1000 - 600 }});
}
}
}*/
</script>

</html>
