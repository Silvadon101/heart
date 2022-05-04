<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Heart/NSTA Trust | Admin Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/heart-shortcut-icon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/css-5/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/css-5/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="/css-5/owl.carousel.css">
    <link rel="stylesheet" href="/css-5/owl.theme.css">
    <link rel="stylesheet" href="/css-5/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/css-5/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/css-5/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="/css-5/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="/css-5/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="/css-5/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="/css-5/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="/css-5/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="/css-5/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/css-5/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="/css-5/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="css-5/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="/css-5/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="/js-5/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="error-pagewrap">
    <div class="error-page-int">
        {{-- -----------heart logo-------------}}
        <div class="text-center m-b-md custom-login">
           <a href="/"><img src="/img/heart-logo.png" class="rounded" alt="logo"></a>&nbsp;
        </div>
        {{-- -----X-----heart logo----X--------}}
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body">
                    <form action="admin-log" id="loginForm" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="username">Username or Email</label>
                        {{--  ------------email error-------------}}
                            @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                            {{--  ------X-----email error------X------}}
                            <input type="text" placeholder="example@gmail.com" title="Please enter you username" name="email" id="username" class="form-control">
{{--                            <span class="help-block small">Your unique username to app</span>--}}
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                        {{--  --------password error-----------}}
                            @error('pwd')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        {{--  -----X---password error-----X------}}
                            <input type="password" title="Please enter your password" placeholder="******" name="pwd" id="password" class="form-control">
{{--                            <span class="help-block small">Yur strong password</span>--}}
                        </div>
                        {{-- --------------form error-----------------}}
                        @if(Session::get('faillog'))
                            <div class="alert alert-danger" role="alert" >
                                {{ Session::get('faillog') }}
                            </div>
                        @endif
{{--
                        <div class="checkbox login-checkbox">
                            <input type="checkbox" class="i-checks">
                                <label>Remember me </label>
                            <p class="help-block small">(if this is a private computer)</p>
                        </div>
                        --}}
                        {{-- -----X--------form error-------X--------}}
                        <button class="btn btn-success btn-block loginbtn" type="submit">Login</button>
{{--                        <a class="btn btn-default btn-block" href="#">Register</a>--}}
                    </form>
                </div>
            </div>
        </div>
        <div class="text-center login-footer">
            <p>Copyright © 2021. All rights reserved. Heart NSTA Trust. An agency of the Prime Minister</p>
        </div>
    </div>
</div>
<!-- jquery
    ============================================ -->
<script src="/js-5/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="/js-5/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
<script src="/js-5/wow.min.js"></script>
<!-- price-slider JS
    ============================================ -->
<script src="/js-5/jquery-price-slider.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="/js-5/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="/js-5/owl.carousel.min.js"></script>
<!-- sticky JS
    ============================================ -->
<script src="/js-5/jquery.sticky.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="/js-5/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="/js-5/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js-5/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="/js-5/metisMenu/metisMenu.min.js"></script>
<script src="/js-5/metisMenu/metisMenu-active.js"></script>
<!-- tab JS
    ============================================ -->
<script src="/js-5/tab.js"></script>
<!-- icheck JS
    ============================================ -->
<script src="/js-5/icheck/icheck.min.js"></script>
<script src="/js-5/icheck/icheck-active.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="/js-5/plugins.js"></script>
<!-- main JS
    ============================================ -->
<script src="/js-5/main.js"></script>
<!-- tawk chat JS
    ============================================ -->
{{--<script src="/js-5/tawk-chat.js"></script>--}}
</body>

</html>
