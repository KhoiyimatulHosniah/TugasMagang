<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BUTANOL APPLICATION</title>
    <link href="asset/images/logoB.png" rel="icon">

    <!-- Custom fonts for this template-->
    <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboardOperator">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-clipboard-list" style="font-size:25px;"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Operator</div>
            </a>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/dashboardOperator">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Nav Item - Data Tamu -->
            <li class="nav-item">
                <a class="nav-link" href="/formDataTamu">
                    <i class="	fas fa-file-alt"></i>
                    <span>Form Data Tamu</span></a>
            </li>

            <!-- Nav Item - Jadwal -->
            <li class="nav-item">
                <a class="nav-link" href="/formJadwalPegawai">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Form Jadwal Pegawai</span></a>
            </li>
<!-- Nav Item - opd -->
<li class="nav-item">
    <a class="nav-link" href="/formopd">
        <i class="fas fa-fw fa-table"></i>
        <span>Form Instansi</span></a>
</li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <i class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 "><h7>{{ Auth::user()->username }} | {{ Auth::user()->role }}</h7></span>
                                <i class="fas fa-user"></i>
                        </i>
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


                    <!-- Content Row -->

                    <div class="row mx-3">

                        <!-- Area Chart -->
                        <div class="col-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Nama Instansi</h6>
                                </div>
                                <!-- Card Body -->
                                <form class="rapat" action="{{ route('tambahopd.store') }}" method="POST"> <!-- Replace "/submitForm" with your form submission URL -->
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-4 col-form-label">Nama Instansi</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="nama" name="nama">
                                            </div>
                                        </div>
                    
                        <div class="form-group row text-right">
                            <div class="col-sm-8"></div> 
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                </div>
            </form>
            
                            </div>
                            
                        </div>
                        

                    </div>

        
                </div>
                

            </div>
            
        </div>
        
    </div>
    

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="asset/vendor/jquery/jquery.min.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="asset/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="asset/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="asset/js/demo/chart-area-demo.js"></script>
    <script src="asset/js/demo/chart-pie-demo.js"></script>

</body>

</html>