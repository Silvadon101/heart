<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - All Courses | Heart/NSTA Trust</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/heart-shortcut-icon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/owl.carousel.css">
    <link rel="stylesheet" href="css-5/owl.theme.css">
    <link rel="stylesheet" href="css-5/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css-5/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css-5/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="/css-5/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js-5/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <!-- Start Left menu area -->
        @include('adminsidemenu')
    <!-- End Left menu area -->

<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                {{-- ------------image to push down page content------------------}}
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        {{-- --------------admin navabr--------------------}}
        @include('adminnavbar')
        {{-- ------X--------admin navabr----------X----------}}

        <!-- Mobile Menu start -->
            @include('adminmobilemenu')
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <form role="search" class="sr-input-func">
                                            <input type="text" placeholder="Search..." class="search-int form-control">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">All Courses</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="courses-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="courses-inner res-mg-b-30">
                        <div class="courses-title">
                            <a href="admindash-courses-info"><img src="img/courses/1.jpg" alt=""></a>
                            <h2>Website Designing Level 3</h2>
                        </div>
                        <div class="courses-alaltic">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        </div>
                        <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons">
                            <a href="#">
                            <button type="button" class="button-default cart-btn">Edit</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="courses-inner">
                        <div class="courses-title">
                            <a href="#"><img src="img/courses/2.jpg" alt=""></a>
                            <h2>Hair Styling Level 2</h2>
                        </div>
                        <div class="courses-alaltic">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        </div>
                        <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="courses-inner res-mg-t-30 dk-res-t-pro-30">
                        <div class="courses-title">
                            <a href="#"><img src="img/courses/3.jpg" alt=""></a>
                            <h2>Early Childhood Development Level 4</h2>
                        </div>
                        <div class="courses-alaltic">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        </div>
                        <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="courses-inner res-mg-t-30 dk-res-t-pro-30">
                        <div class="courses-title">
                            <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                            <h2>Accounting Clerk Level 2</h2>
                        </div>
                        <div class="courses-alaltic">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        </div>
                        <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mg-b-15">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="courses-inner mg-t-30">
                        <div class="courses-title">
                            <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                            <h2>Administrative Assistant Level 3</h2>
                        </div>
                        <div class="courses-alaltic">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        </div>
                        <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="courses-inner mg-t-30">
                        <div class="courses-title">
                            <a href="#"><img src="img/courses/2.jpg" alt=""></a>
                            <h2>Agro-Food Processing Level 3</h2>
                        </div>
                        <div class="courses-alaltic">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        </div>
                        <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="courses-inner mg-t-30">
                        <div class="courses-title">
                            <a href="#"><img src="img/courses/3.jpg" alt=""></a>
                            <h2>Cosmetology Level 2</h2>
                        </div>
                        <div class="courses-alaltic">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        </div>
                        <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="courses-inner mg-t-30">
                        <div class="courses-title">
                            <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                            <h2>Animation Level 3</h2>
                        </div>
                        <div class="courses-alaltic">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                        </div>
                        <div class="course-des">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    ----------------footer---------------------}}
    @include('adminfooter')
    {{--    -------X---------footer--------X-------------}}
</div>

<!-- jquery
    ============================================ -->
<script src="js-5/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="js-5/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
<script src="js-5/wow.min.js"></script>
<!-- price-slider JS
    ============================================ -->
<script src="js-5/jquery-price-slider.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="js-5/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="js-5/owl.carousel.min.js"></script>
<!-- sticky JS
    ============================================ -->
<script src="js-5/jquery.sticky.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="js-5/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="js-5/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js-5/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="js-5/metisMenu/metisMenu.min.js"></script>
<script src="js-5/metisMenu/metisMenu-active.js"></script>
<!-- morrisjs JS
    ============================================ -->
<script src="js-5/sparkline/jquery.sparkline.min.js"></script>
<script src="js-5/sparkline/jquery.charts-sparkline.js"></script>
<script src="js-5/sparkline/sparkline-active.js"></script>
<!-- calendar JS
    ============================================ -->
<script src="js-5/calendar/moment.min.js"></script>
<script src="js-5/calendar/fullcalendar.min.js"></script>
<script src="js-5/calendar/fullcalendar-active.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="js-5/plugins.js"></script>
<!-- main JS
    ============================================ -->
<script src="js-5/main.js"></script>
<!-- tawk chat JS
    ============================================ -->
{{--<script src="js/tawk-chat.js"></script>--}}
</body>

</html>
