<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pandawa</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('tampilan/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('tampilan/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo-smkn-1-tby.png') }}" alt="" height="70">
                </span>
                <div class="sidebar-brand-text mx-3">JURNAL PKL <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>HOME</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link " href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>ABSENSI / JURNAL</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu:</h6>
                        <a class="collapse-item active" href="{{ url('index') }}">ABSENSI HARIAN</a>
                        <a class="collapse-item" href="{{ url('jurnal') }}">JURNAL HARIAN</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('izin') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>IZIN</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('semua') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>SEMUA</span></a>
            </li>
            
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('profil') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>PROFILE</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow bg-gradient-primary">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="dropdown d-one d-lg-inline-block align-self-center">
                        <button class="btn btn-header waves-effect bg-light text-black">
                            SMK NEGERI TAMBAKBOYO
                        </button>
                </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('assets/images/logo-smkn-1-tby.png') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Absensi Siswa</h1>
                    </div>
                    <!-- Content Row -->
                    <!-- Start page content-wrapper -->
                    <div class="page-content-wrapper">
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary mini-stat position-relative">
                                    <div class="card-body">
                                        <div class="mini-stat-desc">
                                            <h5 class="text-uppercase verti-label font-size-16 text-white-50">
                                            </h5>
                                            <div class="text-white">
                                                <h5 class="text-uppercase font-size-16 text-white-50">Masuk</h5>
                                                <h3 class="mb-3 text-white">08.00</h3>
                                                <div class="mb-3">
                                                    <span class="badge bg-light text-info">WIB</span>
                                                    <span class="ms-2">Dimohon Tepat Waktu</span>
                                                </div>
                                                <div class="text white text-center">
                                                    <button type="button" class="btn btn-light text-primary waves-effect waves-light"
                                                        id="sa-success">Absen</button>
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

                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary mini-stat position-relative">
                                    <div class="card-body">
                                        <div class="mini-stat-desc">
                                            <h5 class="text-uppercase verti-label font-size-16 text-white-50">
                                            </h5>
                                            <div class="text-white">
                                                <h5 class="text-uppercase font-size-16 text-white-50">Istirahat</h5>
                                                <h3 class="mb-3 text-white">12.00-13.00</h3>
                                                <div class="mb-3">
                                                    <span class="badge bg-light text-danger"> WIB </span> <span
                                                        class="ms-2">Selamat Istirahat</span>
                                                </div>
                                                <div class="text white text-center">
                                                    <button type="button" class="btn btn-light 
                                                     text-primary waves-effect waves-light"
                                                        id="sa-berhasil">Absen</button>
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

                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary mini-stat position-relative">
                                    <div class="card-body">
                                        <div class="mini-stat-desc">
                                            <h5 class="text-uppercase verti-label font-size-16 text-white-50">
                                            </h5>
                                            <div class="text-white">
                                                <h5 class="text-uppercase font-size-16 text-white-50">pulang
                                                </h5>
                                                <h3 class="mb-3 text-white">16.00</h3>
                                                <div class="mb-3">
                                                    <span class="badge bg-light text-primary"> WIB </span> <span
                                                        class="ms-2">Waktu Pulang</span>
                                                </div>
                                                <div class="text white text-center">
                                                    <button type="button" class="btn btn-light 
                                                     text-primary waves-effect waves-light"
                                                        id="sa-succes">Absen</button>
                                                </div>
                                            </div>
                                            <div class="mini-stat-icon">
                                                <i class="mdi mdi-tag-text-outline display-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>SMEKTA BOYS &copy; Pandawa</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>

        
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                    <button type="submit" class="btn btn-primary" >Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('tampilan/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('tampilan/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('tampilan/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('tampilan/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('tampilan/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('tampilan/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('tampilan/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>