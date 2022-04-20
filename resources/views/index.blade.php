<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/agroxa/layouts/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 06:28:35 GMT -->
<head>

        <meta charset="utf-8" />
        <title>pandawa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/logo-smkn-1-tby.png') }}">


        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="colored">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-smkn-1-tby.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-smkn-1-tby.png') }}" alt="" height="70">
                    </span>
                </a>

                <a href="#" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-smkn-1-tby.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="24">
                    </span>
                </a>
            </div>

            <!-- Menu Icon -->

            <button type="button" class="btn px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>


            <div class="dropdown d-none d-lg-inline-block align-self-center">
                <button class="btn btn-header waves-effect " type="button" aria-expanded="false">
                    SMK NEGERI 1 TAMBAKBOYO</button>
            </div>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- User -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-4.jpg"
                        alt="Header Avatar">
                </button>

                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ url('/profil') }}"><i
                            class="mdi mdi-account-circle font-size-16 align-middle me-2 text-muted"></i>
                        <span>Profile</span></a>
                    <a class="dropdown-item d-block" href="#"><i
                            class="mdi mdi-wrench font-size-16 align-middle text-muted me-2"></i>
                        <span>Settings</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-primary" href="#"><i
                            class="mdi mdi-power font-size-16 align-middle me-2 text-primary"></i>
                        <span>Logout</span></a>
                </div>
            </div>

            <!-- Setting -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-cog bx-spin"></i>
                </button>
            </div>

        </div>
    </div>
</header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">
                    <div class="user-details">
                        <div class="d-flex">
                            <div class="me-2">
                                <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-md rounded-circle">
                            </div>
                            <div class="user-info w-100">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Donald Johnson
                                        <i class="mdi mdi-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-account-circle text-muted me-2"></i>
                                                Profile<div class="ripple-wrapper me-2"></div>
                                            </a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-cog text-muted me-2"></i>
                                                Settings</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-lock-open-outline text-muted me-2"></i>
                                                Lock screen</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-power text-muted me-2"></i>
                                                Logout</a></li>
                                    </ul>
                                </div>

                                <p class="text-white-50 m-0">Administrator</p>
                            </div>
                        </div>
                    </div>


                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                           <a href="{{ url('home') }}"> <li class="menu-title">Home</li></a>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-email"></i>
                                    <span>ABSENSI/JURNAL</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('index') }}">ABSEN HARIAN</a></li>
                                    <li><a href="{{ url('jurnal') }}">JURNAL HARIAN</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('izin') }}" class="waves-effect">
                                    <i class="ion ion-md-clipboard"></i>
                                    <b><span>IZIN</span></b>

                                </a>
                            </li>
                            <li>
                                <a href="{{ url('semua') }}" class="waves-effect">
                                    <i class="ion ion-ios-folder-open"></i>
                                    <b><span>SEMUA</span></b>

                                </a>
                            </li>
                            <li>
                                <a href="{{ url('profil') }}" class="waves-effect">
                                    <i class="ion ion-md-person"></i>
                                    <b><span>PROFILE</span></b>

                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <div class="page-title">
                                        <h4 class="mb-0 font-size-18">ABSENSI</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item active">SMK NEGERI 1 TAMBAKBOYO</li>
                                        </ol>
                                    </div>

                                    <p>Hari/Tanggal: <span id="tanggalwaktu"></span></p>
                                    <script>
                                    var tw = new Date();
                                    if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
                                    else (a=tw.getTime());
                                    tw.setTime(a);
                                    var tahun= tw.getFullYear ();
                                    var hari= tw.getDay ();
                                    var bulan= tw.getMonth ();
                                    var tanggal= tw.getDate ();
                                    var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
                                    var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
                                    document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Start page content-wrapper -->
                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">Masuk</h5>
                                                    <h3 class="mb-3 text-white">08.00</h3>
                                                    <div class="">
                                                        <span class="badge bg-light text-info">WIB</span> <span
                                                            class="ms-2">Dimohon Tepat Waktu</span>
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-cube-outline display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">Istirahat</h5>
                                                    <h3 class="mb-3 text-white">12.00-13.00</h3>
                                                    <div class="">
                                                        <span class="badge bg-light text-danger"> WIB </span> <span
                                                            class="ms-2">Selamat Istirahat</span>
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-buffer display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">pulang
                                                    </h5>
                                                    <h3 class="mb-3 text-white">16.00</h3>
                                                    <div class="">
                                                        <span class="badge bg-light text-primary"> WIB </span> <span
                                                            class="ms-2">Waktu Pulang</span>
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-tag-text-outline display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- end row -->
                            

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4"></h4>
                                             <!-- Start Page-content-Wrapper -->
                                                <h4 class="card-title">ISI DATA KEHADIRAN</h4>
                                                <p class="card-title-desc">SILAHKAN ABSEN</p>
                                                <div class="mb-3 row">
                                                    <label for="example-date-input" class="col-md-2 col-form-label"><b>Tanggal Absen</b></label>
                                                    <div class="col-md-2 border border-secondary">
                                                        <?php
                                                        $tgl=date('d-m-Y');
                                                        echo $tgl;
                                                        ?>
                                                    </div>
                                                </div>
                                                <!-- End Row -->
                                                <div class="mb-3 row">
                                                    <label for="example-time-input" class="col-md-2 col-form-label">Jam Kehadiran</label>
                                                    <div class="col-md-2 border border-secondary">
                                                        <?php 
                                                            date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
                                                            echo date('h:i:s a'); // menampilkan jam sekarang
                                                        ?>
                                                    </div>
                                                </div>
                                                <!-- End Row -->
                                                <div class="mb-3 row">
                                                    <label for="example-time-input" class="col-md-2 col-form-label">Jam Istirahat</label>
                                                    <div class="col-md-2 border border-secondary">
                                                        <?php 
                                                            date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
                                                            echo date('h:i:s a'); // menampilkan jam sekarang
                                                        ?>
                                                    </div>
                                                </div>
                                                <!-- End Row -->
                                                <div class="mb-3 row">
                                                    <label for="example-time-input" class="col-md-2 col-form-label">Jam Pulang</label>
                                                    <div class="col-md-2  border border-secondary">
                                                        <?php 
                                                            date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
                                                            echo date('h:i:s a'); // menampilkan jam sekarang
                                                        ?>
                                                    </div>
                                                </div>
                                                <!-- End Row -->
                                                <div class="mb-1 text-center">
                                                    <div>
                                                        <button type="submit"
                                                            class="btn btn-primary waves-effect waves-light me-16">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Cardbody -->
                                        </div>
                                        <!-- End Card -->
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                                        </div>
                                        <!-- End Cardbody -->
                                    </div>
                                    <!-- End card -->
                                </div>
                                <!-- End Col -->
                            </div>

                        </div>
                        <!-- end page-content-wrapper-->

                    </div>
                    <!-- Container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <script>document.write(new Date().getFullYear())</script> © VIEW <span
                                    class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-primary"></i> by
                                    @Pandawa.</span>
                            </div>

                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.png" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.png" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                            data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                            data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                </div>

            </div>
            <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Peity JS -->
        <script src="assets/libs/peity/jquery.peity.min.js"></script>

        <script src="assets/libs/morris.js/morris.min.js"></script>

        <script src="assets/libs/raphael/raphael.min.js"></script>
        
        <!-- Dashboard init JS -->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>


<!-- Mirrored from themesbrand.com/agroxa/layouts/blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 06:29:12 GMT -->
</html>