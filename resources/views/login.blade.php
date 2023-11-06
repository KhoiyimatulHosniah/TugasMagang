<!-- login.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('image/iconatas.png') }}" rel="icon">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <title>BUTANOL</title>
    <style>
    body {
        background-color: transparent;
    }
</style>
</head>
<body>
    <section class="vh-10 gradient-custom">
        <div class="container py-0 vh-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-form-login text-white" style="margin-top:0; !important">
                        <div class="card-body back-login p-5 text-center">

                            <div class="mb-md-5 mt-5 vh-25" style="height: 425px; !important!;">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Masukkan Username dan Password!</p>
                                <form class="user" action="{{url('/login') }}" method="POST">
                                    @csrf
                                    <div class="form-outline form-white mb-4">
                                        <input type="username" name="username" id="typeEmailX" class="form-control form-control-lg" required>
                                        <label class="form-label" for="typeUsernameX">Username</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" required>
                                        <label class="form-label" for="typePasswordX">Password</label>
                                    </div>
                                    <button class="btn btn-primary btn-lg px-5" type="submit" name="submit">Login</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <!-- Vendor JS Files -->
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{url('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('assets/js/main.js')}}"></script>

</body>
</html>
