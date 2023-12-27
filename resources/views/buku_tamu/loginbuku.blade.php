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
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    {{--    Show password--}}
    <script>
        function showPassword() {
            var passwordInput = document.getElementById('password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }
    </script>

</head>

<body class="bg-primary">
<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto">
            <a href="/landing1" style="display: flex; align-items: center;">
                <img src="asset\images/logo2.png" alt="Logo" style="height: 40px; margin-right: 10px;">
                Pemerintah Kabupaten Situbondo
            </a>
        </h1>

    </div>
</header><!-- End Header -->
<br>
<section class="vh-3 gradient-custom">
    <div class="container py-0 vh-90">
        <div class="row d-flex justify-content-center align-items-center h-90">
            <div class="col-3 col-md-6 col-lg-3 col-xl-5">
                <h3 class="text-gray-900 mb-4">Selamat Datang sebagai Resepsionis</h3>
                <div class="card bg-form-login text-white" style="margin-top:0;">
                    <div class="card-body back-login p-5 text-center">

                        <div class="mb-md-2 mt-0 vh-4" style="height: 150px;">
                            <img src="asset/images/logoAd1.png" alt="Logo">
                            <h4 class="text-gray-900 mb-4">LOGIN</h4>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form class="user" action="{{ url('/login') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <input type="text" name="username" class="form-control form-control-user"
                                       id="exampleInputUsername"
                                       aria-describedby="usernameHelp" placeholder="Username"
                                       value="{{ old('username') }}">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user"
                                       id="exampleInputPassword"
                                       placeholder="Password">
                            </div>

                            @if ($errors->any())
                                <div id="notification" class="alert alert-danger">
                                    {{ $errors->first() }}
                                </div>


                                <script>
                                    $(document).ready(function () {
                                        // Sembunyikan notifikasi setelah 3 detik
                                        setTimeout(function () {
                                            $('#notification').fadeOut('fast');
                                        }, 3000); // 3000 milidetik (3 detik)
                                    });
                                </script>
                            @endif

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
