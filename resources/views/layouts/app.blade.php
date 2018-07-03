<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/titan-template/style.css') }}" rel="stylesheet">
    @stack('style-head')
</head>
<body>
    <div class="container-scroller" >
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-left navbar-brand-wrapper">
                <a class="navbar-brand brand-logo" href="#"><i class="mdi mdi-cards-outline"></i>Titan</a>
                <a class="navbar-brand brand-logo-mini" href="#"><i class="mdi mdi-cards-outline"></i></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-self-stretch align-items-center">
                <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
                    <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
                </form>
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                            {{Auth::user()->name}}<img src="images/faces/face9.jpg">
                        </a>
                        <div class="dropdown-menu navbar-dropdown notification-drop-down" aria-labelledby="notificationDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fa fa-birthday-cake text-success fa-fw"></i>
                                <span class="notification-text">Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="count">7</span>
                        </a>
                        <div class="dropdown-menu navbar-dropdown notification-drop-down" aria-labelledby="notificationDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-birthday-cake text-success fa-fw"></i>
                                <span class="notification-text">Today is John's birthday</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-phone text-danger fa-fw"></i>
                                <span class="notification-text">Call John Doe</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-handshake-o text-primary fa-fw"></i>
                                <span class="notification-text">Meeting Alisa</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-exclamation-triangle text-danger fa-fw"></i>
                                <span class="notification-text">Server space almost full</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-bell text-warning fa-fw"></i>
                                <span class="notification-text">Payment Due</span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-email-outline"></i>
                            <span class="count">4</span>
                        </a>
                        <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
                            <a class="dropdown-item" href="#">
                                <div class="sender-img">
                                    <img src="images/faces/face6.jpg" alt="">
                                    <span class="badge badge-success">&nbsp;</span>
                                </div>
                                <div class="sender">
                                    <p class="Sende-name">John Doe</p>
                                    <p class="Sender-message">Hey, We have a meeting planned at the end of the day.</p>
                                </div>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="sender-img">
                                    <img src="images/faces/face2.jpg" alt="">
                                    <span class="badge badge-success">&nbsp;</span>
                                </div>
                                <div class="sender">
                                    <p class="Sende-name">Leanne Jones</p>
                                    <p class="Sender-message">Can we schedule a call this afternoon?</p>
                                </div>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="sender-img">
                                    <img src="images/faces/face3.jpg" alt="">
                                    <span class="badge badge-primary">&nbsp;</span>
                                </div>
                                <div class="sender">
                                    <p class="Sende-name">Stella</p>
                                    <p class="Sender-message">Great presentation the other day. Keep up the good work!</p>
                                </div>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="sender-img">
                                    <img src="images/faces/face4.jpg" alt="">
                                    <span class="badge badge-warning">&nbsp;</span>
                                </div>
                                <div class="sender">
                                    <p class="Sende-name">James Brown</p>
                                    <p class="Sender-message">Need the updates of the project at the end of the week.</p>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item view-all">View all</a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <div class="row row-offcanvas row-offcanvas-right">
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    @component('layouts.navibar',['controller'=>$controller])
                    @endcomponent
                </nav>
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <footer class="footer">
                    <div class="container-fluid clearfix">
                        @yield('footer')
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('plugins/popper.js/popper.min.js') }}" defer></script>
    <script src="{{ asset('plugins/bootstrap/v4.0.0/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}" defer></script>
    <script src="{{ asset('js/misc.js') }}" defer></script>
@stack('scrip-footer')
</body>
</html>
