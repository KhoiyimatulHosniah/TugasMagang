<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUTANOL APPLICATION</title>
    <link href="asset/images/logoB.png" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">
        <a href="/landing1" style="display: flex; align-items: center;">
          <img src="asset\images/logo2.png" alt="Logo" style="height: 40px; margin-right: 10px;">
          Pemerintah Kabupaten Situbondo
        </a>
      </h1>
      <div class="user-info">
        @auth <!-- Check if there's a logged-in user -->
            <div class="user-welcome">{{ Auth::user()->username }}</div> <!-- Display the username of the logged-in user -->
        @endauth
    </div>
    
    @auth <!-- Check if there's a logged-in user -->
        <div class="logout">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    @endauth
    <!--navbar -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero3" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Daftar Hadir Rapat</h1>
          <img src="asset/images/zoom1.png" alt="Your Image" class="img-fluid" />
          <div class="d-flex justify-content-center justify-content-lg-start align-items-center">
            <a href="#rapat" class="btn-get-started scrollto">Lihat Rapat <i class="bi bi-chevron-double-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">


    <!-- ======= Layanan Section ======= -->
<section id="rapat" class="services section-bg">
  <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>Rapat Hari Ini</h2>
      </div>
      <!-- Add a search form -->
<div class="row justify-content-center mb-3">
  <div class="col-lg-6">
<form>
          <div class="input-group">
              
 
<input type="text" class="form-control" placeholder="Cari Rapat" name="search">
              <div class="input-group-append">
                  
              
<button id="btncari" class="btn btn-primary" onclick="searchTable()">Cari</button>
              
         
</div>
          </div>
      </form>
  
  
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

            $("#tabeltampil tbody tr").each(function () {
                var rowText = $(this).text().toLowerCase();
                var isVisible = rowText.indexOf(value) > -1;
                $(this).toggle(isVisible);
            });
        }

        // Show all data if search input is cleared
        $("#searchInput").on("input", function () {
            var value = $(this).val().trim().toLowerCase();
            if (value === "") {
                $("#tabeltampil tbody tr").show();
            }
        });
    });
</script>
      <div id="tabeltampil" class="row justify-content-center">
          <div class="col-lg-12 mt-3" data-aos="zoom-in" data-aos-delay="100">
              <table class="table">
                  <thead>
                      <tr>
                        <th>No</th>
                          <th>Nama Rapat</th>
                          <th>Tanggal</th>
                          <th>Waktu</th>
                          <th>Tempat</th>
                          <th>Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($items as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->nama }}</td>
                          <td>{{ \Carbon\Carbon::parse($item->tanggal)->isoFormat('DD-MM-YYYY') }}</td>
                          <td>{{ $item->waktu }}</td>
                          <td>{{ $item->tempat }}</td>
                          <td>
                            <a href="/tampilRapat/{{ $item->id }}" class="btn btn-primary" onclick="checkSchedule('{{ $item->tanggal }}', '{{ $item->waktu }}')">Hadiri Rapat</a>

<script>
  function checkSchedule(date, time) {
    // Mendapatkan tanggal dan waktu saat ini
    var now = new Date();
    var currentDate = now.toISOString().split('T')[0]; // Mendapatkan tanggal saat ini dalam format YYYY-MM-DD
    var currentTime = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }); // Mendapatkan waktu saat ini dalam format HH:MM

    // Menggabungkan tanggal dan waktu rapat ke dalam satu string dan membuat objek Date
    var scheduleDateTime = new Date(date + 'T' + time);

    // Mendapatkan waktu saat rapat dimulai
    var scheduleTime = scheduleDateTime.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

    // Memeriksa apakah hari ini adalah hari rapat dan waktu rapat belum terlewati
    if (currentDate === date && currentTime <= scheduleTime) {
      // Membuat notifikasi
      if (window.Notification && Notification.permission === "granted") {
        new Notification("Notifikasi Anda", { body: "Anda berhasil menghadiri rapat" });
      } else if (window.Notification && Notification.permission !== "denied") {
        Notification.requestPermission().then(function(permission) {
          if (permission === "granted") {
            new Notification("Notifikasi Anda", { body: "Anda berhasil menghadiri rapat" });
          }
        });
      }
    } else {
      alert("Rapat sudah berlalu atau belum dimulai!");
    }
  }
</script>

                            
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</section>
<!-- End Services Section -->

   
  <!-- ======= Footer ======= -->
  <footer id="footer">
      <div class="copyright">&copy; {{ date('Y') }} PKLpolije. Dinas Komunikasi dan Informatika.</div>
      
  </footer><!-- End Footer -->

  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>