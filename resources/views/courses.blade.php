<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Heart/NSTA Trust | Courses</title>
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

    {{-- Courses section css external 
    =========================== --}}
        <!-- Site Icons -->
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css-6/bootstrap.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="css-6/style.css">
        <!-- ALL VERSION CSS -->
        <link rel="stylesheet" href="css-6/versions.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css-6/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css-6/custom.css">
    
        <!-- Modernizer for Portfolio -->
        <script src="js-6/modernizer.js"></script>
    

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.img/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .course-container{
            padding: 45px 0;
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
<!-- end loader -->
<!-- END LOADER -->

<!-- Start header -->
@include('navbar')
<!-- End header -->

<!-- section -->
<section class="inner_banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="full">
                    <h3>Courses</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- section -->
{{-- <div class="section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="heading_main text_align_center">
                        <h2><span>Popular </span>Courses</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="img/p1.png" alt="#">
                    <h4>Financial Accounting</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="img/p2.png" alt="#">
                    <h4>Managerial Accounting</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="img/p3.png" alt="#">
                    <h4>Intermediate Accounting</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="img/p3.png" alt="#">
                    <h4>Intermediate Accounting</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="img/p1.png" alt="#">
                    <h4>Financial Accounting</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="img/p2.png" alt="#">
                    <h4>Managerial Accounting</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="img/p1.png" alt="#">
                    <h4>Financial Accounting</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="img/p2.png" alt="#">
                    <h4>Managerial Accounting</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="full blog_img_popular">
                    <img class="img-responsive" src="img/p3.png" alt="#">
                    <h4>Intermediate Accounting</h4>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- end section -->

 {{-- =============================================== 
    TODO: Add "Apply" btn to courses blocks. 
          Change "books" tag to "price" tag on courses blocks.
          remove "5-star" rating from courses blocks.
          Add "Professor" if possible to courses blocks.
 =============================================== --}}

{{-- ----courses row ----- --}}
<div class="course-container">
            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
                              <div class="image-blog">
                                   <img src="img/blog_1.jpg" alt="" class="img-fluid">
                              </div>
                              <div class="course-br">
                                   <div class="course-title">
                                        <h2><a href="#" title="">Early Childhood Development</a></h2>
                                   </div>
                                   <div class="course-desc">
                                        <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
                                   </div>
                                   <div class="course-rating">
                                        4.5
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star-half"></i>                                       
                                   </div>
                              </div>
                              <div class="course-meta-bot">
                                   <ul>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                        <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                        <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                                   </ul>
                              </div>
                         </div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
                              <div class="image-blog">
                                   <img src="img/blog_2.jpg" alt="" class="img-fluid">
                              </div>
                              <div class="course-br">
                                   <div class="course-title">
                                        <h2><a href="#" title="">Web Development</a></h2>
                                   </div>
                                   <div class="blog-desc">
                                        <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
                                   </div>
                                   <div class="course-rating">
                                        4.5
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star-half"></i>                                       
                                   </div>
                              </div>
                              <div class="course-meta-bot">
                                   <ul>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                        <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                        <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                                   </ul>
                              </div>
                         </div>
                </div><!-- end col -->  
                    
                    <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
                              <div class="image-blog">
                                   <img src="img/blog_3.jpg" alt="" class="img-fluid">
                              </div>
                              <div class="course-br">
                                   <div class="course-title">
                                        <h2><a href="#" title="">Administrative Assistant</a></h2>
                                   </div>
                                   <div class="course-desc">
                                        <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
                                   </div>
                                   <div class="course-rating">
                                        4.5
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star-half"></i>                                       
                                   </div>
                              </div>
                              <div class="course-meta-bot">
                                   <ul>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                        <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                        <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                                   </ul>
                              </div>
                         </div>
                </div><!-- end col -->
            </div><!-- end row -->           
               
               <hr class="hr3"> 
               
            <div class="row"> 
                    <div class="col-lg-4 col-md-6 col-12">
                   <div class="course-item">
                              <div class="image-blog">
                                   <img src="img/blog_4.jpg" alt="" class="img-fluid">
                              </div>
                              <div class="course-br">
                                   <div class="course-title">
                                        <h2><a href="#" title="">Medical Sciences</a></h2>
                                   </div>
                                   <div class="course-desc">
                                        <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
                                   </div>
                                   <div class="course-rating">
                                        4.5
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star-half"></i>                                       
                                   </div>
                              </div>
                              <div class="course-meta-bot">
                                   <ul>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                        <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                        <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                                   </ul>
                              </div>
                         </div>
                </div><!-- end col -->
                    
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
                              <div class="image-blog">
                                   <img src="img/blog_5.jpg" alt="" class="img-fluid">
                              </div>         
                              <div class="course-br">
                                   <div class="course-title">
                                        <h2><a href="#" title="">Finance</a></h2>
                                   </div>
                                   <div class="course-desc">
                                        <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
                                   </div>
                                   <div class="course-rating">
                                        4.5
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star-half"></i>                                       
                                   </div>
                              </div>
                              <div class="course-meta-bot">
                                   <ul>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                        <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                        <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                                   </ul>
                              </div>
                         </div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
                              <div class="image-blog">
                                   <img src="img/blog_6.jpg" alt="" class="img-fluid">
                              </div>
                              <div class="course-br">
                                   <div class="course-title">
                                        <h2><a href="#" title="">Fashion Designing</a></h2>
                                   </div>
                                   <div class="course-desc">
                                        <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
                                   </div>    
                                   <div class="course-rating">
                                        4.5
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star"></i>    
                                        <i class="fa fa-star-half"></i>                                       
                                   </div>
                              </div>
                              <div class="course-meta-bot">
                                   <ul>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
                                        <li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
                                        <li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
                                   </ul>
                              </div>
                         </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->


{{-- --X--courses row --X--- --}}

<!-- Start Footer -->
@include('footer')

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
</body>

</html>
