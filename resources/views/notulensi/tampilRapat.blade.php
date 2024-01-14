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
      <div class="navigation" style="display: flex; justify-content: space-between; align-items: center;">
    <ul style="list-style: none; display: flex; background-color:transparent">
        <li style="margin-right: 10px;">
            <div class="">
                <button class="user-info" onclick="toggleDropdown()">
                    <h7>{{ Auth::user()->username }} | {{ Auth::user()->role }}</h7>
                </button>
                <div class="dropdown-content" id="dropdownContent">
                    <a href="/history">History</a>
                    <a href="/logout">Logout</a>
                </div>
            </div>
        </li>
    </ul>
</div>

<script>
    function toggleDropdown() {
        var dropdownContent = document.getElementById("dropdownContent");
        dropdownContent.classList.toggle("show");
    }
</script>

<style>
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 120px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
        
    }

    .show {
        display: block;
    }
</style>
    
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
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var scrollLinks = document.querySelectorAll('.scrollto');
  
      scrollLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
          e.preventDefault();
  
          var targetId = this.getAttribute('href').substring(1);
          var targetElement = document.getElementById(targetId);
  
          if (targetElement) {
            window.scrollTo({
              top: targetElement.offsetTop,
              behavior: 'smooth'
            });
          }
        });
      });
    });
  </script>
  

  <main id="main">


    <!-- ======= Layanan Section ======= -->
<section id="rapat" class="services section-bg">
  <div class="container" data-aos="fade-up">
      <div class="section-title mt-9">
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

    </form>
  </div>
</div>
<!-- ... (Your existing HTML code) ... -->

<script>
  function searchTable() {
    // Get the input value
    var input = document.querySelector('input[name="search"]').value.toLowerCase();

    // Get the table and its rows within the "Rapat Hari Ini" section
    var table = document.getElementById('tabeltampil');
    var rows = table.getElementsByTagName('tr');

    // Loop through all table rows and compare each cell text with the search input
    for (var i = 1; i < rows.length; i++) {
      var cells = rows[i].getElementsByTagName('td');
      var found = false;

      for (var j = 0; j < cells.length; j++) {
        var cellText = cells[j].textContent || cells[j].innerText;

        // Check if the cell text contains the search input
        if (cellText.toLowerCase().indexOf(input) > -1) {
          found = true;
          break;
        }
      }

      // Toggle the visibility of the row based on the search result
      rows[i].style.display = found ? '' : 'none';
    }
  }
</script>

<!-- ... (Your existing HTML code) ... -->

<div id="tabeltampil" class="row justify-content-center">
  <div class="col-lg-12 mt-3" data-aos="zoom-in" data-aos-delay="100">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Rapat</th>
          <th>Hari</th>
          <th>Tanggal</th>
          <th>Waktu</th>
          <th>Tempat</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @php
        $counter = 1;
        $currentDate = now()->format('Y-m-d');
        $currentTime = now()->format('H:i');
        @endphp
        @foreach($items as $item)
        @php
        $scheduleDateTime = \Carbon\Carbon::parse($item->tanggal . ' ' . $item->pukul);
        $isPastDate = $scheduleDateTime->isPast();
        $isFutureDate = $scheduleDateTime->isFuture();
        $isSameDate = $scheduleDateTime->isSameDay(now());
        @endphp
        @if ($isPastDate)
        @continue
        @endif
        <tr>
          <td>{{ $counter }}</td>
          <td>{{ $item->kegiatan }}</td>
          <td>{{ $item->hari }}</td>
          <td>{{ \Carbon\Carbon::parse($item->tanggal)->isoFormat('DD-MM-YYYY') }}</td>
          <td>{{ $item->pukul }}</td>
          <td>{{ $item->tempat }}</td>
          <td>
            @if ($isFutureDate || $isSameDate)
            <button id="btnhadir" class="btn btn-primary" onclick="checkSchedule('{{ $item->tanggal }}', '{{ $item->pukul }}')">Hadiri Rapat</button>
            @else
            <button id="btnhadir" class="btn btn-secondary" disabled>Rapat Belum Dimulai</button>
            @endif
          </td>
        </tr>
        <div id="signatureOverlay" class="overlay">
          <div id="signatureArea" class="signature-container">
            <!-- Tempatkan kode HTML area tanda tangan di sini -->
            <!-- Sebagai contoh: -->
            <canvas id="signatureCanvas"></canvas>
            <button id="btnSend" class="btn btn-primary">Kirim</button>
          </div>
        </div>
        <style>
          /* Tambahkan gaya CSS berikut ke file stylesheet Anda atau dalam tag <style> */
.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 9999;
  display: none;
  align-items: center;
  justify-content: center;
}

.signature-container {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
}
          </style>
        @php
        $counter++;
        @endphp
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<script>
  function checkSchedule(date, time) {
  var now = new Date();
  var currentDate = now.toISOString().split('T')[0];
  var currentTime = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

  var scheduleDateTime = new Date(date + ' ' + time);
  var scheduleTime = scheduleDateTime.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

  var twoHoursBefore = new Date(scheduleDateTime.getTime() - (2 * 60 * 60 * 1000));
  var fiveHoursAfter = new Date(scheduleDateTime.getTime() + (5 * 60 * 60 * 1000));

  if (currentDate === date && currentTime >= twoHoursBefore.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }) && currentTime <= fiveHoursAfter.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })) {
    // Menampilkan overlay area tanda tangan
    var signatureOverlay = document.getElementById("signatureOverlay");
    signatureOverlay.style.display = "flex";
  } else {
    alert("Rapat sudah berlalu atau belum dimulai!");
  }
}
}
</script>

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