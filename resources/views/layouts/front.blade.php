<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{asset("assets/front/bootstrap/dist/css/bootstrap.min.css")}}>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/front/css/vendors/font-awesome.css")}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/front/css/vendors/slick.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/front/css/vendors/slick-theme.css")}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/front/css/vendors/animate.css")}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/front/css/vendors/themify-icons.css")}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/front/css/vendors/bootstrap.css")}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/front/css/style.css")}}">
    <title>@yield("title")</title>
    @yield("css")
</head>
<body class="theme-color-23">
<div class="loader_skeleton">
    <header class="header-style-5">
@include("layouts.front.navbar")
@yield("content")
@include("layouts.front.footer")
    </header>
</div>

<script src="{{asset("assets/front/js/jquery-3.3.1.min.js")}}"></script>
<script src="{{asset("assets/front/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/front/js/bootstrap-notify.min.js")}}"></script>

<script src="{{asset("assets/front/js/slick.js")}}"></script>
<script src="{{asset("assets/front/js/slick-animation.min.js")}}"></script>

<!-- menu js-->
<script src="{{asset("assets/front/js/menu.js")}}"></script>

<!-- lazyload js-->
<script src="{{asset("assets/front/js/lazysizes.min.js")}}"></script>

<!-- feather icon js-->
<script src="{{asset("assets/front/js/feather.min.js")}}"></script>

<!-- Timer js-->
<script src="{{asset("assets/front/js/timer.js")}}"></script>


<!-- Theme js-->
<script src="{{asset("assets/front/js/theme-setting.js")}}"></script>
<script src="{{asset("assets/front/js/script.js")}}"></script>
<script src="{{asset("assets/front/js/custom-slick-animated.js")}}"></script>


@yield("js")
</body>

</html>
