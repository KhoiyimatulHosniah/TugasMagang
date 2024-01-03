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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 ">{{ Auth::user()->username }} | <h7>{{ Auth::user()->role }}</h7></span>
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
                                    <h6 class="m-0 font-weight-bold text-primary">Kegiatan Rapat</h6>
                                </div>
                                <!-- Card Body -->
                                <form class="rapat" action="{{ route('formKegiatan.store') }}" method="POST"> <!-- Replace "/submitForm" with your form submission URL -->
                                    <div class="card-body">
                    <div class="form-group row">
                        <label for="kegiatan" class="col-sm-4 col-form-label">Kegiatan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="kegiatan" name="kegiatan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hari" class="col-sm-4 col-form-label">Hari</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="hari" name="hari" onchange="checkOther()">
                                <option value=""disabled selected>Pilih Hari</option>
                                <option value="hari 1">Senin</option>
                                <option value="hari 1">Selasa</option>
                                <option value="hari 1">Rabu</option>
                                <option value="hari 1">Kamis</option>
                                <option value="hari 1">Jumat</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                        <div class="col-sm-8">
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                            
                        </div>
                    </div>
                    
                    <script>
                        document.getElementById('tanggal').addEventListener('change', function() {
                            var selectedDate = new Date(this.value);
                            var options = { weekday: 'long' };
                            var hari = selectedDate.toLocaleDateString('id-ID', options);
                            
                            document.getElementById('selectedDay').value = hari;
                            document.getElementById('hariDisplay').textContent = hari ;
                        });
                    </script>
                    <div class="form-group row">
                        <label for="pukul" class="col-sm-4 col-form-label">Pukul</label>
                        <div class="col-sm-8">
                            <input type="time" class="form-control" id="pukul" name="pukul">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tempat" class="col-sm-4 col-form-label">Ruangan</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="tempat" name="tempat" onchange="checkOther()">
                                <option value=""disabled selected>Pilih Ruangan</option>
                                <option value="Pilihan 1">Ruang Baluran</option>
                                <option value="Pilihan 2">Ruang Intelligence Room</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <div id="otherInput" style="display: none;">
                                <input type="text" class="form-control mt-2" id="otherText" placeholder="Isi tempat lainnya">
                            </div>
                        </div>
                    </div>
                    
                    <script>
                        function checkOther() {
                            var tempatDropdown = document.getElementById('tempat');
                            var otherInput = document.getElementById('otherInput');
                            var otherText = document.getElementById('otherText');
                    
                            if (tempatDropdown.value === 'Lainnya') {
                                otherInput.style.display = 'block';
                                otherText.required = true;
                            } else {
                                otherInput.style.display = 'none';
                                otherText.required = false;
                                otherText.value = '';
                            }
                        }
                    </script>
                    <div class="form-group row">
                        <label for="undangan" class="col-sm-4 col-form-label">Undangan Rapat</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                    <input type="text" class="form-control" id="undangan" name="undangan">
                                <div class="input-group-append">
                    <span class="input-group-text" onclick="addData()"><i class="fas fa-plus-circle"></i></span>
                                </div>
                            </div>
                            <script>
    function addData() {
    var undanganValue = document.getElementById('undangan').value.trim();

    // Check if the input is not empty
    if (undanganValue !== '') {
        var table = document.getElementById('undangantabel').getElementsByTagName('tbody')[0];

        // Check if the value already exists in the table
        var duplicate = false;
        for (var i = 0; i < table.rows.length; i++) {
            var existingValue = table.rows[i].cells[1].innerHTML.trim();
            if (existingValue.toLowerCase() === undanganValue.toLowerCase()) {
                duplicate = true;
                break;
            }
        }

        // If it's not a duplicate, add the data
        if (!duplicate) {
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);

            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);

            cell1.innerHTML = rowCount + 1;
            cell2.innerHTML = undanganValue;
            cell3.innerHTML = `
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-info btn-sm ml-2" onclick="editRow(this)" title="Edit">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-danger btn-sm ml-2" onclick="deleteRow(this)" title="Delete">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            `;

            // Clear the input after adding data
            document.getElementById('undangan').value = '';
        } else {
            alert('Data sudah ada dalam tabel.');
        }
    } else {
        alert('Input tidak boleh kosong');
    }
}

    function editRow(btn) {
        var row = btn.parentNode.parentNode.parentNode;
        var cells = row.getElementsByTagName("td");

        var newValue = prompt("Enter new value:", cells[1].innerHTML);
        if (newValue !== null) {
            cells[1].innerHTML = newValue;
        }
    }

    function deleteRow(btn) {
    var row = btn.parentNode.parentNode.parentNode;
    var table = row.parentNode;

    table.removeChild(row); // Hapus baris

    // Perbarui nomor urutan pada sel pertama setiap baris setelah penghapusan
    var rowCount = table.rows.length;
    for (var i = 0; i < rowCount; i++) {
        table.rows[i].cells[0].innerHTML = i + 1;
    }
}

    
</script>
                        
                    <!-- Content Row -->

                    <div class="row ">

                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id ="undangantabel" class="table table-bordered" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Instansi</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    
                                                </tr>
                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                            </div>
                        </div>
                        

                    </div>
                    <div class="form-group row text-right">
                        <div class="col-sm-4"></div> 
                        <div class="col-sm-8">
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