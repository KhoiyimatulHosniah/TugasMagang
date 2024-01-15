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
<!-- Timer Notifikasi-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboardNotulen">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-tasks" style="font-size:25px;"></i>
            </div>
            <div class="sidebar-brand-text mx-3">NOTULENSI</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/dashboardNotulen">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Nav Item - Data Tamu -->
        <li class="nav-item">
            <a class="nav-link" href="/formNotulen">
                <i class="	fas fa-file-alt"></i>
                <span>Form Notulensi</span></a>
        </li>

        <!-- Nav Item - Jadwal -->
        <li class="nav-item">
            <a class="nav-link" href="/formKegiatan">
                <i class="fas fa-fw fa-table"></i>
                <span>Form Kegiatan</span></a>
        </li>
<!-- Nav Item - rapat -->
<li class="nav-item">
    <a class="nav-link" href="/daftarhadir">
        <i class="fas fa-id-card"></i>
        <span>Daftar Hadir Rapat</span></a>
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
            <!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yakin untuk Keluar?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Klik "Logout" apabila Anda ingin keluar.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{ route ('landing1') }}">Logout</a>
        </div>
    </div>
</div>
</div>
            <!-- End of Topbar -->


            <!-- Content Row -->

            <div class="row mx-3">

                <!-- Area Chart -->
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Notulensi </h6>
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                @if(session('success'))
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil!',
                                    text: '{{ session('success') }}',
                                    timer: 2000, // waktu dalam milidetik (2 detik)
                                    showConfirmButton: false
                                });
                                @elseif(session('error'))
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: '{{ session('error') }}',
                                    timer: 2000, // waktu dalam milidetik (2 detik)
                                    showConfirmButton: false
                                });
                                @endif
                            });
                        </script>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <a href="/tambahNotulensi" class="btn btn-primary btn-sm ml-4"><i class="fas fa-plus"></i></a>
                            
                            <div class="input-group col-sm-4 mr-3">
                                <input type="text" id="searchInput" class="form-control form-control-sm" placeholder="Search...">
                                <div class="input-group-append">
                                    <button id="searchButton" class="btn btn-primary btn-sm" type="button"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- At the end of the body tag -->
                        <script src="asset/vendor/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        // Function to filter data when search button is clicked
        $("#searchButton").click(function () {
            filterTable();
        });

        // Function to filter data based on search input
        function filterTable() {
            var value = $("#searchInput").val().toLowerCase();

            $("#tabelNotulensi tbody tr").each(function () {
                var rowText = $(this).text().toLowerCase();
                var isVisible = rowText.indexOf(value) > -1;
                $(this).toggle(isVisible);
            });
        }

        // Show all data if search input is cleared
        $("#searchInput").on("input", function () {
            var value = $(this).val().trim().toLowerCase();
            if (value === "") {
                $("#tabelNotulensi tbody tr").show();
            }
        });
    });
</script>

                        

                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="tabelNotulensi" class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Sidang / Rapat</th>
                                        <th>Hari</th>
                                        <th>Tanggal</th>
                                        <th>Acara</th>
                                        <th>Ketua</th>
                                        <th>Sekretaris</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->sidang_rapat }}</td>
                                            <td>{{ $item->hari }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->tanggal)->isoFormat('DD-MM-YYYY') }}</td>
                                            <td>{{ $item->acara }}</td>
                                            <td>{{ $item->ketua }}</td>
                                            <td>{{ $item->sekretaris }}</td>
                                            <td>
                                                <a href="/printNotulen" class="btn btn-primary btn-circle" onclick="printNotulensi">
                                                    <i class='fas fa-print'></i>
                                                </a>
                                                <script>
                                                    function printNotulensi(itemId) {
                                                        // You may need to replace 'your_print_page.php' with the actual URL or route for your print page.
                                                        var printWindow = window.open('/printnotulen' + itemId, '_blank');
                                                        printWindow.print();
                                                    }
                                                </script>
                                                
                                                <a href="{{ route('formNotulen.edit', ['id' => $item->id]) }}"
                                                    class="btn btn-primary btn-circle">
                                                     <i class="fas fa-edit"></i>
                                                 </a>
                                                 <a href="{{ route('formNotulen.hapus', ['id' => $item->id]) }}"
                                                    class="btn btn-danger btn-circle"
                                                    onclick="confirmModal('{{ route('formNotulen.hapus', ['id' => $item->id]) }}')">
                                                     <i class="fas fa-trash-alt"></i>
                                                 </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <!-- Add more rows as needed -->
                                    </tbody>

                                </table>
                                <div class="pagination">
                            <ul class="pagination">
                                <li class="page-item {{ $items->previousPageUrl() ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $items->previousPageUrl() }}">Previous</a>
                                </li>
                                @foreach ($items->getUrlRange(1, $items->lastPage()) as $page => $url)
                                <li class="page-item {{ $page == $items->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                                @endforeach
                                <li class="page-item {{ $items->nextPageUrl() ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $items->nextPageUrl() }}">Next</a>
                                </li>
                            </ul>
                        </div>
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
