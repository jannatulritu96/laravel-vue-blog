<!DOCTYPE html>
<html dir="ltr" lang="en">
<!-- Mirrored from wrappixel.com/ampleadmin/ampleadmin-html/ampleadmin-sidebar/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Apr 2019 18:44:37 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets/assets/images/favicon.png')); ?>">
<title>Laravel</title>
<!-- chartist CSS -->
<link href="<?php echo e(asset('assets/assets/libs/chartist/dist/chartist.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')); ?>" rel="stylesheet">
<!--c3 CSS -->
<link href="<?php echo e(asset('assets/assets/libs/morris.js/morris.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('assets/assets/extra-libs/c3/c3.min.css')); ?>" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?php echo e(asset('assets/assets/libs/fullcalendar/dist/fullcalendar.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset('assets/assets/extra-libs/calendar/calendar.css')); ?>" rel="stylesheet" />
<!-- needed css -->
<link href="<?php echo e(asset('assets/dist/css/style.min.css')); ?>" rel="stylesheet">


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- text editor -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<!-- This Page CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/assets/libs/select2/dist/css/select2.min.css')); ?>">
<!-- vue.js Application -->
<!-- <script src=".node_modules/vue/dist/vue.min.js"></script> -->
<!-- <script src=".node_modules/vue/dist/vue.js"></script> -->
<!-- Sweet alert -->
<script src="<?php echo e(asset('assets/assets/libs/jquery/dist/jquery.min.js')); ?>"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<link rel="stylesheet" href="<?php echo e(asset('assets/assets/libs/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
<!-- date picker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/flatpickr.min.css">
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header border-right">
        <!-- This is for the sidebar toggle which is visible on mobile only -->
        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        <a class="navbar-brand" href="<?php echo e(route('dashboard')); ?>">
            <!-- Logo icon -->
            <b class="logo-icon">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img src="<?php echo e(asset('assets/assets/images/logos/logo-icon.png')); ?>" alt="homepage" class="dark-logo" />
                <!-- Light Logo icon -->
                <img src="<?php echo e(asset('assets/assets/images/logos/logo-light-icon.png')); ?>" alt="homepage" class="light-logo" />
            </b>

            <!--End Logo icon -->
            <!-- Logo text -->
            <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="<?php echo e(asset('assets/assets/images/logos/logo-text.png')); ?>" alt="homepage" class="dark-logo" />
                <!-- Light Logo text -->
                             <img src="<?php echo e(asset('assets/assets/images/logos/logo-light-text.png')); ?>" class="light-logo" alt="homepage" />
                        </span>
        </a>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Toggle which is visible on mobile only -->
        <!-- ============================================================== -->
        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
    </div>
    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->

    <div class="navbar-collapse collapse" id="navbarSupportedContent">
        <!-- ============================================================== -->
        <!-- toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav float-left mr-auto">
            <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-18"></i></a></li>
            <!-- ============================================================== -->
            <!-- Messages -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-18 mdi mdi-gmail"></i>
                    <div class="notify">
                        <span class="heartbit"></span>
                        <span class="point"></span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown" aria-labelledby="2">

                </div>
            </li>
            <!-- ============================================================== -->
            <!-- Comment -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-check-circle font-18"></i>
                    <div class="notify">
                        <span class="heartbit"></span>
                        <span class="point"></span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                    <span class="with-arrow"><span class="bg-primary"></span></span>
                </div>
            </li>

            <!-- ============================================================== -->
            <!-- End mega menu -->
            <!-- ============================================================== -->
        </ul>
        <!-- ============================================================== -->
        <!-- Right side toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav float-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <span class="ml-2 font-medium"><?php echo e(Auth::user()->name); ?></span><span class="fas fa-angle-down ml-2"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                    <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">

                        <div class="ml-2">
                            <h4 class="mb-0"><?php echo e(Auth::user()->name); ?></h4>


                            <p class=" mb-0 text-muted"><?php echo e(Auth::user()->email); ?></p>
                            <a href="javascript:void(0)" class="btn btn-sm btn-danger text-white mt-2 btn-rounded">View Profile</a>
                        </div>
                    </div>
                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user mr-1 ml-1"></i>View Profile</a>
                    <a class="btn btn-default btn-flat" href="<?php echo e(route('password.change')); ?>" class="btn btn-default btn-flat"><i class="ti-lock mr-1 ml-1"></i>Change Password</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
        </ul>
    </div>

</nav>
</header>

    <aside class="left-sidebar">
    <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item">
                        <h4 class="sidebar-link  waves-effect waves-dark profile-dd text-center">
                            
                            <span><?php echo e(Auth::user()->name); ?></span>
                        </h4>
                    </li>
                    <li class="sidebar-item">
                        <router-link to="/home" class="sidebar-link  waves-effect waves-dark">
                                <i class="fa fa-table"></i>
                                <span>Dashboard</span>
                        </router-link>
                    </li>
                    <li  class="sidebar-item">
                        <router-link to="/category-list" class="sidebar-link  waves-effect waves-dark">
                            <i class="fa fa-cubes"></i>
                            <span>Category</span>
                        </router-link>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" style="display: block;" id="app">
                <admin-main></admin-main>                   
    </div>
</div>
<div class="chat-windows"></div>
<?php echo $__env->yieldContent('script'); ?>
<!-- All Jquery -->
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo e(asset('/assets/assets/libs/popper.js/dist/umd/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/assets/libs/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- apps -->
<script src="<?php echo e(asset('/assets/dist/js/app.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/dist/js/app.init.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/dist/js/app-style-switcher.js')); ?>"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo e(asset('/assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/assets/extra-libs/sparkline/sparkline.js')); ?>"></script>
<!--Wave Effects -->
<script src="<?php echo e(asset('assets/dist/js/waves.js')); ?>"></script>
<!--Menu sidebar -->
<script src="<?php echo e(asset('/assets/dist/js/sidebarmenu.js')); ?>"></script>
<!--Custom JavaScript -->
<script src="<?php echo e(asset('/assets/dist/js/custom.min.js')); ?>"></script>
<!-- This Page JS -->
<script src="<?php echo e(asset('/assets/assets/libs/chartist/dist/chartist.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/dist/js/pages/chartist/chartist-plugin-tooltip.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/assets/extra-libs/c3/d3.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/assets/extra-libs/c3/c3.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/assets/libs/raphael/raphael.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/assets/libs/morris.js/morris.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/dist/js/pages/dashboards/dashboard1.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/assets/libs/moment/min/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/assets/libs/fullcalendar/dist/fullcalendar.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/dist/js/pages/calendar/cal-init.js')); ?>"></script>
<script>
    $('#calendar').fullCalendar('option', 'height', 650);

</script>
<!--ck editor js -->
<script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<!-- select2 JS -->
<script src="<?php echo e(asset('assets/assets/libs/select2/dist/js/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/assets/libs/select2/dist/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/dist/js/pages/forms/select2/select2.init.js')); ?>"></script>

<!-- Select2 -->
<!-- <script src="<?php echo e(asset('assets/assets/select2/js/select2.full.min.js')); ?>"></script> -->

<!-- date picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/flatpickr.min.js"></script>

<script src="<?php echo e(asset('assets/assets/libs/quill/dist/quill.min.js')); ?>"></script>

</html>
<?php /**PATH X:\xampp\htdocs\laravel-Vue\resources\views/admin/adminmaster.blade.php ENDPATH**/ ?>