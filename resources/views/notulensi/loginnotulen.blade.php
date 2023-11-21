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
        <section class="vh-5 gradient-custom">
        <div class="container py-0 vh-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <h4 class="text-gray-900 mb-4">Selamat Datang sebagai Notulensi</h4>
                        <div class="card bg-form-login text-white" style="margin-top:0;">
                            <div class="card-body back-login p-5 text-center">

                                <div class="mb-md-2 mt-0 vh-4" style="height: 150px;">
                                    <img src="asset/images/logoAd1.png" alt="Logo">
                                    <h4 class="text-gray-900 mb-4">LOGIN</h4>
                                </div>

                                    <form class="user" action="{{ url('/loginNotulensi') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" id="exampleInputUsername"
                                                aria-describedby="usernameHelp" placeholder="Username" value="{{ old('username') }}">
                                            @error('username')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword"
                                                placeholder="Password">
                                            @error('password')
                                         <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                    </form>
                                                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

        <!-- Bootstrap core JavaScript-->
        <script src="asset/vendor/jquery/jquery.min.js"></script>
        <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="asset/js/sb-admin-2.min.js"></script>
</html>