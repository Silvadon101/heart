<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <style>
        input{
            padding: 12px;
            margin: 12px;
        }

    </style>
    <title>Heart NSTA | Admin Add</title>
</head>
<body>
    <form action="admin-add" method="post">
        @csrf
        @error('name')
        <div class="alert alert-danger alert-dismissible fade show" role="alert" >
            {{ $message }}
        </div>
        @enderror
        <input type="text" name="name" placeholder="fullname" ><br>
        @if(session('failuser'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('failuser') }}
            </div>
        @endif
        @error('username')
        <div class="alert alert-danger alert-dismissible fade show" role="alert" >
            {{ $message }}
        </div>
        @enderror

        <input type="text" name="username" placeholder="username" ><br>
        @if(session('failemail'))
            <div class="alert alert-danger" role="alert" >
                {{ session('failemail') }}
            </div>
        @endif
        @error('email')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}
        </div>
        @enderror

        <input type="email" name="email" placeholder="example@gmail.com" ><br>
        @error('password')
        <div class="alert alert-danger alert-dismissible fade show" role="alert" >
            {{ $message }}
        </div>
        @enderror

        <input type="password" name="password" placeholder="******" ><br>
        <input type="submit">
    </form>
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif


</body>
</html>
