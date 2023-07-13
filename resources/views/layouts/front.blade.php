<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{asset("assets/bootstrap/dist/css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/sweetalert2/dist/sweetalert2.min.css")}}>
    <title>@yield("title")</title>
    @yield("css")
</head>
<body>
@include("layouts.front.navbar")
@yield("content")
@include("layouts.front.footer")

<script src="{{asset("assets/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/jquery/dist/jquery.min.js")}}"></script>
<script src="{{asset("assets/sweetalert2/dist/sweetalert2.all.min.js")}}"></script>
<script src="https://kit.fontawesome.com/f2df97ccb6.js" crossorigin="anonymous"></script>

@yield("js")
</body>

</html>
