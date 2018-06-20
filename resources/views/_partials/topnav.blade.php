<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- chartist CSS -->

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ URL::asset('/css/colors/red-dark.css')}}
            " id="theme" rel="stylesheet">
    <link href="{{ URL::asset('/css/desinfo.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121116559-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-121116559-1');
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Arvo:500');
    </style>
</head>

<body class="fix-header fix-sidebar card-no-border logo-center">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header">
                <a class="navbar-brand" href="">
                    <!-- Logo icon -->
                    <b>
                       <i class="wi wi-earthquake"></i>
                    </b>

                </a>
            </div>
            <div class="navbar-collapse">

                <ul class="navbar-nav mr-auto mt-md-0">

                    <li class="nav-item">
                        <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                           href="javascript:void(0)">
                            <i class="mdi mdi-menu"></i>
                        </a>
                    </li>

                    <li class="nav-item hidden-sm-down search-box">
                        <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)">
                            <i class="ti-search"></i>
                        </a>
                        <form class="app-search">
                            <input type="text" class="form-control" placeholder="Търсене В Сайта">
                            <a class="srh-btn">
                                <i class="ti-close"></i>
                            </a>
                        </form>
                    </li>
                    <li class="nav-item hidden-sm-down">
                        <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="
{{url::to('/')}}">
                            <i class="ti-home"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav my-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="mdi mdi-message"></i>
                            <div class="notify">
                                <span class="heartbit"></span>
                                <span class="point"></span>
                            </div>
                        </a>
                        <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                            <ul>
                                <li>
                                    <div class="drop-title">Съобщения</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="">

                                            <div class="mail-contnet">
                                                 </div>
                                        </a>


                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);">
                                        <strong>Вижте Още</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <img src="/images/static/avatar.jpg" alt="user" class="profile-pic"/>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right scale-up">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img">
                                            <img src="/images/static/avatar.jpg" alt="user">
                                        </div>
                                        <div class="u-text">

                                            <p class="text-muted">Coming Soon</p>
                                            <a href="#" class="btn btn-rounded btn-danger btn-sm disabled">Профил</a>
                                        </div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="ti-user"></i> Моят Профил</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-wallet"></i> Моето съдържание</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-email"></i> Моите коментари</a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="ti-settings"></i> Настройки</a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-power-off"></i> Изход</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @if (Auth::check())
                        <li>
                            <a href="/admin/"  target="_blank">
                                <i class="ti-settings"></i> Admin Panel</a>
                        </li>
                    @else

                @endif
                    <!-- ============================================================== -->
                    <!-- Language -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="flag-icon flag-icon-bg"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right scale-up">
                            <a class="dropdown-item" href="#">
                                <i class="flag-icon flag-icon-us"></i> English</a>
                            <a class="dropdown-item" href="#">
                                <i class="flag-icon flag-icon-de"></i>German</a>
                            <a class="dropdown-item" href="#">
                                <i class="flag-icon flag-icon-pl"></i> Polish</a>
                            <a class="dropdown-item" href="#">
                                <i class="flag-icon flag-icon-ru"></i> Russian</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>