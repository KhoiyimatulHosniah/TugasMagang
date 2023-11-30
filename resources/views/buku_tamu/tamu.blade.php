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
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h5 text-gray-900 mb-4">FORM TAMU</h1>
                                    </div>
                                    <form class="user" action="{{ route('datatamu.store') }}" method="POST">
                                        @csrf

                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                id="exampleInputName" aria-describedby="nameHelp"
                                                placeholder="Nama">
                                        </div>

                                        <div class="form-group">
                                            <select type="text" placeholder="Pilih Jenis Kelamin"
                                                class="form-control form-select" name="jenis_kelamin" id="jenis_kelamin">
                                                <option>Pilih Jenis Kelamin</option>
                                                <option>Laki-laki</option>
                                                <option>Perempuan</option>
                                                
                                            </select>
                                        </div>

                                       <div class="form-group">
                                            <input type="date" class="form-control"
                                                id="exampleInputTanggal" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                id="exampleInputName" aria-describedby="nameHelp"
                                                placeholder="Tujuan">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                id="exampleInputName" aria-describedby="nameHelp"
                                                placeholder="Nama Instansi">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                id="exampleInputName" aria-describedby="nameHelp"
                                                placeholder="Telepon">
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">KIRIM</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

</html>