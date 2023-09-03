<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{env("APP_NAME")}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Main Styles -->
    <link rel="stylesheet" href="/dark/assets/styles/style.min.css">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="/dark/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="/dark/assets/plugin/waves/waves.min.css">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="/dark/assets/plugin/sweet-alert/sweetalert.css">

    <!-- Percent Circle -->
    <link rel="stylesheet" href="/dark/assets/plugin/percircle/css/percircle.css">

    <!-- Chartist Chart -->
    <link rel="stylesheet" href="/dark/assets/plugin/chart/chartist/chartist.min.css">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="/dark/assets/plugin/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/dark/assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>

    <!-- Dark Themes -->
    <link rel="stylesheet" href="/dark/assets/styles/style-dark.min.css">
    
	<!-- Remodal -->
	<link rel="stylesheet" href="/dark/assets/plugin/modal/remodal/remodal.css">
	<link rel="stylesheet" href="/dark/assets/plugin/modal/remodal/remodal-default-theme.css">
</head>

<body>
    <div class="main-menu">
        <header class="header">
            <a href="/" class="logo">{{env("APP_NAME")}}</a>
            <button type="button" class="button-close fa fa-times js__menu_close"></button>
            <div class="user">
                <a href="#" class="avatar"><img src="http://placehold.it/80x80" alt=""><span class="status online"></span></a>
                <h5 class="name"><a href="profile.html">{{auth()->user()->name}}</a></h5>
                <h5 class="position">User</h5>
                <!-- /.name -->
                <div class="control-wrap js__drop_down">
                    <i class="fa fa-caret-down js__drop_down_button"></i>
                    <div class="control-list">
                        <div class="control-item"><a href="javascript:void"><i class="fa fa-user"></i> Profile</a></div>
                        <div class="control-item"><a href="javascript:void"><i class="fa fa-gear"></i> Settings</a></div>
                        <div class="control-item"><a href="javascript:void"><i class="fa fa-sign-out"></i> Log out</a></div>
                    </div>
                    <!-- /.control-list -->
                </div>
                <!-- /.control-wrap -->
            </div>
            <!-- /.user -->
        </header>
        <!-- /.header -->
        <div class="content">

            <div class="navigation">
                <h5 class="title">Menu</h5>
                <!-- /.title -->
                <ul class="menu js__accordion">
                    <li class="current">
                        <a class="waves-effect" href="/dashboard"><i class="menu-icon fa fa-home"></i><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-book"></i><span>My Blogs</span><span class="menu-arrow fa fa-angle-down"></span></a>
                        @if(auth()->user()->level == "admin")
                        <ul class="sub-menu js__content">
                            <li><a href="home/blogs/create">Create</a></li>
                        </ul>
                        @endif
                        <!-- /.sub-menu js__content -->
                    </li>
                </ul>
                <!-- /.menu js__accordion -->
            </div>
            <!-- /.navigation -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.main-menu -->

    <div class="fixed-navbar">
        <div class="pull-left">
            <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
            <h1 class="page-title">Home</h1>
            <!-- /.page-title -->
        </div>
        <!-- /.pull-left -->
        <div class="pull-right">
            <div class="ico-item">
                <a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
                <form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="fa fa-search button-search" type="submit"></button></form>
                <!-- /.searchform -->
            </div>
            <!-- /.ico-item -->
            <div class="ico-item fa fa-arrows-alt js__full_screen"></div>
            <!-- /.ico-item fa fa-fa-arrows-alt -->
            <div class="ico-item toggle-hover js__drop_down ">
                <span class="fa fa-th js__drop_down_button"></span>
                <div class="toggle-content">
                </div>
                <!-- /.toggle-content -->
            </div>
            <!-- /.ico-item -->
            <a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
            <a href="#" class="ico-item pulse"><span class="ico-item fa fa-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a>
            <a href="#" class="ico-item fa fa-power-off js__logout"></a>
        </div>
        <!-- /.pull-right -->
    </div>
    <!-- /.fixed-navbar -->
    <!-- /#notification-popup -->

    <!-- /#message-popup -->
    <div id="wrapper">
        <div class="main-content">
            @yield("content")
            <footer class="footer">
                <ul class="list-inline">
                    <li>2016 © {{env("APP_NAME")}}</li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </footer>
        </div>
        <!-- /.main-content -->
    </div><!--/#wrapper -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="/dark/assets/script/html5shiv.min.js"></script>
		<script src="/dark/assets/script/respond.min.js"></script>
	<![endif]-->
    <!-- 
	================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="/dark/assets/scripts/jquery.min.js"></script>
    <script src="/dark/assets/scripts/modernizr.min.js"></script>
    <script src="/dark/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/dark/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/dark/assets/plugin/nprogress/nprogress.js"></script>
    <script src="/dark/assets/plugin/sweet-alert/sweetalert.min.js"></script>
    <script src="/dark/assets/plugin/waves/waves.min.js"></script>
    <!-- Full Screen Plugin -->
    <script src="/dark/assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

    <!-- Percent Circle -->
    <script src="/dark/assets/plugin/percircle/js/percircle.js"></script>

    <!-- Google Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Chartist Chart -->
    <script src="/dark/assets/plugin/chart/chartist/chartist.min.js"></script>
    <script src="/dark/assets/scripts/chart.chartist.init.min.js"></script>

    <!-- FullCalendar -->
    <script src="/dark/assets/plugin/moment/moment.js"></script>
    <script src="/dark/assets/plugin/fullcalendar/fullcalendar.min.js"></script>
    <script src="/dark/assets/scripts/fullcalendar.init.js"></script>

	<!-- Remodal -->
	<script src="/dark/assets/plugin/modal/remodal/remodal.min.js"></script>

    <script src="/dark/assets/scripts/main.min.js"></script>
</body>

</html>