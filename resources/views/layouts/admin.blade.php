<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Google font-->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">



    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css/vendors/font-awesome.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css/vendors/flag-icon.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css/vendors/bootstrap.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css/style.css")}}">
    <link rel="icon" href="{{asset("assets/admin/images/dashboard/favicon.png")}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset("assets/admin/images/dashboard/favicon.png")}}" type="image/x-icon">
    <!-- Google font-->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">


    <title>@yield("title")</title>
    @yield("css")

</head>
<body>


<div class="page-wrapper">
    <div class="page-body-wrapper">
        @include("layouts.admin.sidebar")
        <div class="page-body" style="margin-top: 0px">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>@yield('header')</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item">
                                    <a href="{{route('admin.index')}}">
                                        <i data-feather="home">asd</i>
                                    </a>
                                </li>
                                @yield('breadcrumb')

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @yield("content")
        </div>
        @include("layouts.admin.footer")
    </div>
</div>





@yield("js")
<!-- latest jquery-->
<script src="{{asset("assets/admin/js/jquery-3.3.1.min.js")}}"></script>

<!-- Bootstrap js-->
<script src="{{asset("assets/admin/js/bootstrap.bundle.min.js")}}"></script>

<!-- feather icon js-->
<script src="{{asset("assets/admin/js/icons/feather-icon/feather.min.js")}}"></script>
<script src="{{asset("assets/admin/js/icons/feather-icon/feather-icon.js")}}"></script>

<!-- Sidebar jquery-->
<script src="{{asset("assets/admin/js/sidebar-menu.js")}}"></script>

<!--Customizer admin-->
<script src="{{asset("assets/admin/js/admin-customizer.js")}}"></script>

<!-- lazyload js-->
<script src="{{asset("assets/admin/js/lazysizes.min.js")}}"></script>

<!--right sidebar js-->
<script src="{{asset("assets/admin/js/chat-menu.js")}}"></script>

<!--script admin-->
<script src="{{asset("assets/admin/js/admin-script.js")}}"></script>
</body>

</html>
