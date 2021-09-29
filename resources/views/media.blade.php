<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Heart/NSTA Trust | Media</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="img/heart-shortcut-icon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css-4/bootstrap.min.css">
    <link rel="stylesheet" href="css-4/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css-4/fontAwesome.css">
    <link rel="stylesheet" href="css-4/light-box.css">
    <link rel="stylesheet" href="css-4/templatemo-style.css">

    <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <script src="js-4/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <style>
        body{
            background-color: #181818;
        }
    </style>

</head>

<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

<!-- LOADER -->
<div id="preloader">
    <div class="loader">
        <img src="img/loader.gif" alt="#" />
    </div>
</div>
<!-- END LOADER -->

<!-- Start Navbar -->
{{--@include('navbar')--}}
    <nav >
        <div class="logo">
            <a href="/" class="navbar-brand" ><img src="img/heartnsta-logo-2.png" alt=""></a>
        </div>
            <div class="menu-icon">
                <span></span>
            </div>
    </nav>
<!-- End Navbar -->

<!-- section -->
    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                <h1>Welcome to <em>Our Media Blog</em></h1>
                <p>Explore</p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="img/scroll-icon.png" alt=""></a>
                </div>
            </div>
        </div>
        <video autoplay loop muted>
            <source src="vid/highway-loop.mp4" type="video/mp4" />
        </video>
    </div>


<div class="full-screen-portfolio" id="portfolio">
    <div class="container-fluid">
        @foreach($images as $img)

            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="{{ asset('/storage/img/'.$img->name) }}" data-lightbox="image-1"><div class="thumb" >
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <h1>Stony Hill <em>Campus</em></h1>
                                    <p>Click Me</p>
                                </div>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/storage/img/'.$img->name) }}">
                            </div>
                        </div></a>
                </div>
            </div>
        @endforeach
{{--        <div class="col-md-4 col-sm-6">--}}
{{--            <div class="portfolio-item">--}}
{{--                <a href="img/amber-group-1.jpg" data-lightbox="image-1"><div class="thumb">--}}
{{--                        <div class="hover-effect">--}}
{{--                            <div class="hover-content">--}}
{{--                                <h1>raclette <em>taxidermy</em></h1>--}}
{{--                                <p>Awesome Subtittle Goes Here</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="image">--}}
{{--                            <img src="img/amber-group-1.jpg" >--}}
{{--                        </div>--}}
{{--                    </div></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-4 col-sm-6">--}}
{{--            <div class="portfolio-item">--}}
{{--                <a href="img/heart-chefs.jpg" data-lightbox="image-1"><div class="thumb">--}}
{{--                        <div class="hover-effect">--}}
{{--                            <div class="hover-content">--}}
{{--                                <h1>humblebrag <em>brunch</em></h1>--}}
{{--                                <p>Awesome Subtittle Goes Here</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="image">--}}
{{--                            <img src="img/heart-chefs.jpg">--}}
{{--                        </div>--}}
{{--                    </div></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-4 col-sm-6">--}}
{{--            <div class="portfolio-item">--}}
{{--                <a href="img/heart-dancing.jpeg" data-lightbox="image-1"><div class="thumb">--}}
{{--                        <div class="hover-effect">--}}
{{--                            <div class="hover-content">--}}
{{--                                <h1>Succulents <em>chambray</em></h1>--}}
{{--                                <p>Awesome Subtittle Goes Here</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="image">--}}
{{--                            <img src="img/heart-dancing.jpeg">--}}
{{--                        </div>--}}
{{--                    </div></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-4 col-sm-6">--}}
{{--            <div class="portfolio-item">--}}
{{--                <a href="img/big_portfolio_item_5.png" data-lightbox="image-1"><div class="thumb">--}}
{{--                        <div class="hover-effect">--}}
{{--                            <div class="hover-content">--}}
{{--                                <h1>freegan <em>aesthetic</em></h1>--}}
{{--                                <p>Awesome Subtittle Goes Here</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="image">--}}
{{--                            <img src="img/portfolio_item_5.png">--}}
{{--                        </div>--}}
{{--                    </div></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-4 col-sm-6">--}}
{{--            <div class="portfolio-item">--}}
{{--                <a href="img/big_portfolio_item_6.png" data-lightbox="image-1"><div class="thumb">--}}
{{--                        <div class="hover-effect">--}}
{{--                            <div class="hover-content">--}}
{{--                                <h1>taiyaki <em>vegan</em></h1>--}}
{{--                                <p>Awesome Subtittle Goes Here</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="image">--}}
{{--                            <img src="img/portfolio_item_6.png">--}}
{{--                        </div>--}}
{{--                    </div></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-4 col-sm-6">--}}
{{--            <div class="portfolio-item">--}}
{{--                <a href="img/big_portfolio_item_7.png" data-lightbox="image-1"><div class="thumb">--}}
{{--                        <div class="hover-effect">--}}
{{--                            <div class="hover-content">--}}
{{--                                <h1>Thundercats <em>santo</em></h1>--}}
{{--                                <p>Awesome Subtittle Goes Here</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="image">--}}
{{--                            <img src="img/portfolio_item_7.png">--}}
{{--                        </div>--}}
{{--                    </div></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-4 col-sm-6">--}}
{{--            <div class="portfolio-item">--}}
{{--                <a href="img/big_portfolio_item_8.png" data-lightbox="image-1"><div class="thumb">--}}
{{--                        <div class="hover-effect">--}}
{{--                            <div class="hover-content">--}}
{{--                                <h1>wayfarers <em>yuccie</em></h1>--}}
{{--                                <p>Awesome Subtittle Goes Here</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="image">--}}
{{--                            <img src="img/portfolio_item_8.png">--}}
{{--                        </div>--}}
{{--                    </div></a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-4 col-sm-6">--}}
{{--            <div class="portfolio-item">--}}
{{--                <a href="img/big_portfolio_item_9.png" data-lightbox="image-1"><div class="thumb">--}}
{{--                        <div class="hover-effect">--}}
{{--                            <div class="hover-content">--}}
{{--                                <h1>disrupt <em>street</em></h1>--}}
{{--                                <p>Awesome Subtittle Goes Here</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="image">--}}
{{--                            <img src="img/portfolio_item_9.png">--}}
{{--                        </div>--}}
{{--                    </div></a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
<!-- end section -->
<!-- Start Footer -->
{{--@include('footer')--}}

{{--Overlay Menu--}}
<section class="overlay-menu">
    <div class="container">
        <div class="row">
            <div class="main-menu">
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="courses">COURSES</a></li>
                    <li><a href="apply">APPLY</a></li>
                    <li><a href="media">MEDIA</a></li>
                    <li><a href="about">ABOUT US</a></li>
                    <li><a href="contact">CONTACT US</a></li>
                    @if(session('loguser'))
                        <li><a href="logout">Logout</a></li>
                    @else
                        <li><a href="login">LogIn/SignUp</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>

<a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.pogo-slider.min.js"></script>
<script src="js/slider-index.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/form-validator.min.js"></script>
<script src="js/contact-form-script.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/images-loded.min.js"></script>
<script src="js/custom.js"></script>
<script>
    /* counter js */

    (function ($) {
        $.fn.countTo = function (options) {
            options = options || {};

            return $(this).each(function () {
                // set options for current element
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from:            $(this).data('from'),
                    to:              $(this).data('to'),
                    speed:           $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals:        $(this).data('decimals')
                }, options);

                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;

                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

                $self.data('countTo', data);

                // if an existing interval can be found, clear it first
                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                // initialize the element with the starting value
                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;

                    render(value);

                    if (typeof(settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof(settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0,               // the number the element should start at
            to: 0,                 // the number the element should end at
            speed: 1000,           // how long it should take to count between the target numbers
            refreshInterval: 100,  // how often the element should be updated
            decimals: 0,           // the number of decimal places to show
            formatter: formatter,  // handler for formatting the value before rendering
            onUpdate: null,        // callback method for every time the element is updated
            onComplete: null       // callback method for when the element finishes updating
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));

    jQuery(function ($) {
        // custom formatting example
        $('.count-number').data('countToOptions', {
            formatter: function (value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }
        });

        // start all the timers
        $('.timer').each(count);

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }
    });
</script>

{{--More Javascript files--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js-4/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js-4/vendor/bootstrap.min.js"></script>

<script src="js-4/plugins.js"></script>
<script src="js-4/main.js"></script>

</body>
</html>
