<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="au theme template">
<meta name="author" content="Hau Nguyen">
<meta name="keywords" content="au theme template">

<!-- Title Page-->
<title>Admins</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Fontfaces CSS-->
<link href="/adminthem/css/font-face.css" rel="stylesheet" media="all">
<link href="/adminthem/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<link href="/adminthem/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
<link href="/adminthem/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

<!-- Bootstrap CSS-->
<link href="/adminthem/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

<!-- Vendor CSS-->
<link href="/adminthem/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
<link href="/adminthem/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
<link href="/adminthem/vendor/wow/animate.css" rel="stylesheet" media="all">
<link href="/adminthem/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
<link href="/adminthem/vendor/slick/slick.css" rel="stylesheet" media="all">
<link href="/adminthem/vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="/adminthem/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="adminthem/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="/home-admin">
                        <img src="/adminthem/images/icon/logo.png" alt="CoolAdmin" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">

            
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="/home-admin">
                <img src="/adminthem/images/icon/logo.png" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                
                <ul class="list-unstyled navbar__list">            
                    <li>
                        <a style="margin-right: -10px;" href="/transaction-admin">
                           <i class="fa fa-tasks" aria-hidden="true"></i>User Transaction</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <div class="form-header"></div>
                        <div class="header-button">
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="images/adminimage/{{$info[0]->image}}" alt="John Doe" />
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="">{{$info[0]->name}}</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="images/adminimage/{{$info[0]->image}}" alt="John Doe" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#">{{$info[0]->name}}</a>
                                                </h5>
                                                <span class="email">{{$info[0]->email}}</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="/home-admin">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="/logout-admin">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                <div class="row">
                    @yield('body')
                </div>
        </div>
    </div>
</div>


        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>

        <script src="/adminthem/vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="/adminthem/vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="/adminthem/vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="/adminthem/vendor/slick/slick.min.js">
        </script>
        <script src="/adminthem/vendor/wow/wow.min.js"></script>
        <script src="/adminthem/vendor/animsition/animsition.min.js"></script>
        <script src="/adminthem/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="/adminthem/vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="/adminthem/vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="/adminthem/vendor/circle-progress/circle-progress.min.js"></script>
        <script src="/adminthem/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="/adminthem/vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="/adminthem/vendor/select2/select2.min.js">
        </script>
        <!-- Main JS-->
        <script src="/adminthem/js/main.js"></script>

    </body>

    </html>
<!-- end document-->