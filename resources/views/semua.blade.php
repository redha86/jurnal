<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/agroxa/layouts/blue/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 06:33:20 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Pandawa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/logo-smkn-1-tby.png') }}">
        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
            type="text/css" />
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm-light.png" alt="" height="22">
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
                    <a class="dropdown-item" href="{{ url('profil') }}"><i
                            class="mdi mdi-account-circle font-size-16 align-middle me-2 text-muted"></i>
                        <span>Profile</span></a>
                    <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i
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
                                    <span>ABSENSI</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('tampilan') }}">ABSEN HARIAN</a></li>
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
                                        <h4 class="mb-0 font-size-18">REKAP JURNAL</h4>
                                        <h4 class="mb-0 font-size-10">SISWA SMKN 1 TAMBAKBOYO</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                       <!-- end row -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body"> 
                                            <table id="datatable-buttons"
                                                class="table table-striped table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr class="bg-primary text-light">
                                                        <th>No</th>
                                                        <th>Tanggal</th>
                                                        <th>Ringkasan Kegiatan</th>
                                                        <th>Hasil Kegiatan</th>
                                                        <th>file foto</th>
                                                        <th>aksi</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>13-3-2022</td>
                                                        <td>melanjutkan projek</td>
                                                        <td>menambahkan proses login disertai database</td>
                                                        <td>####</td>
                                                        <td >
                                                            <i class="bi bi-pencil bg-primary text-light fs-4 p-1 rounded"></i>
                                                            <i class="bi bi-trash bg-primary text-light fs-4 p-1 rounded"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>12-3-2022</td>
                                                        <td>melanjutkan Projek</td>
                                                        <td>menambahkan fitur absen</td>
                                                        <td>##</td>
                                                        <td >
                                                            <i class="bi bi-pencil bg-primary text-light fs-4 p-1 rounded"></i>
                                                            <i class="bi bi-trash bg-primary text-light fs-4 p-1 rounded"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>11-3-2022</td>
                                                        <td>melanjutkan projek</td>
                                                        <td>Memperbaiki fitur rekap jurnal</td>
                                                        <td>##</td>
                                                        <td >
                                                            <i class="bi bi-pencil bg-primary text-light fs-4 p-1 rounded"></i>
                                                            <i class="bi bi-trash bg-primary text-light fs-4 p-1 rounded"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>10-3-2022</td>
                                                        <td>Melanjutkan Projek</td>
                                                        <td>menambahkan menu profil</td>
                                                        <td>###</td>
                                                        <td >
                                                            <i class="bi bi-pencil bg-primary text-light fs-4 p-1 rounded"></i>
                                                            <i class="bi bi-trash bg-primary text-light fs-4 p-1 rounded"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>9-3-2022</td>
                                                        <td>Melanjutkan projek</td>
                                                        <td>Pindah ke laravel</td>
                                                        <td>##</td>
                                                        <td >
                                                            <i class="bi bi-pencil bg-primary text-light fs-4 p-1 rounded"></i>
                                                            <i class="bi bi-trash bg-primary text-light fs-4 p-1 rounded"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>8-3-2022</td>
                                                        <td>Melanjutkan projek</td>
                                                        <td>memperbaiki tampilan home</td>
                                                        <td>##</td>
                                                        <td >
                                                            <i class="bi bi-pencil bg-primary text-light fs-4 p-1 rounded"></i>
                                                            <i class="bi bi-trash bg-primary text-light fs-4 p-1 rounded"></i>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                        </div>
                        <!-- End Page-content -->

                    </div>
                    <!-- Container-Fluid -->
                </div>
                <!-- End Page-content-wrapper -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <script>document.write(new Date().getFullYear())</script> © Agroxa <span
                                    class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-primary"></i> by
                                    Themesbrand.</span>
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

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>


<!-- Mirrored from themesbrand.com/agroxa/layouts/blue/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 06:33:26 GMT -->
</html>