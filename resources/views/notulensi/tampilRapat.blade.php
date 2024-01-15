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
      <nav id="navbar" class="navbar">
        <ul><li><a href="/loginRapat" data-toggle="modal" data-target="#logoutModal">Logout</a></li>
        </ul>
    </nav>
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
    <!-- Search form -->
  <form onsubmit="event.preventDefault(); searchTable();">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Cari Rapat" name="search">
      <div class="input-group-append">
        <button id="btncari" class="btn btn-primary" onclick="searchTable()">Cari</button>
      </div>
    </div>
  </form>
  </div>
</div>
<!-- ... (Your existing HTML code) ... -->

<script>
  function searchTable() {
    var input = document.querySelector('input[name="search"]').value.toLowerCase();
    var table = document.getElementById('tabeltampil');
    var rows = table.getElementsByTagName('tr');

    for (var i = 1; i < rows.length; i++) {
      var cells = rows[i].getElementsByTagName('td');
      var found = false;

      for (var j = 0; j < cells.length; j++) {
        var cellText = cells[j].textContent || cells[j].innerText;

        if (cellText.toLowerCase().indexOf(input) > -1) {
          found = true;
          break;
        }
      }

      // Tampilkan kembali semua baris jika kata kunci kosong
      if (input === '') {
        rows[i].style.display = '';
      } else {
        rows[i].style.display = found ? '' : 'none';
      }
    }
  }
</script>


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
        @foreach($items as $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->kegiatan }}</td>
            <td>{{ $item->hari }}</td>
            <td>{{ \Carbon\Carbon::parse($item->tanggal)->isoFormat('DD-MM-YYYY') }}</td>
            <td>{{ $item->pukul }}</td>
            <td>{{ $item->tempat }}</td>
            <td>
              <a href="{{ route('signaturepad') }}"class="btn hadir-button" onclick="checkSchedule('{{ $item->tanggal }}', '{{ $item->pukul }}')">Hadiri Rapat</a>
            </td>
            <script>
              document.addEventListener('DOMContentLoaded', function () {
                var buttons = document.querySelectorAll('.hadir-button');
            
                buttons.forEach(function (button) {
                  button.addEventListener('click', function () {
                    // Mendapatkan data rapat dari baris yang sesuai
                    var meetingDate = this.closest('tr').querySelector('td:nth-child(4)').innerText;
                    var meetingTime = this.closest('tr').querySelector('td:nth-child(5)').innerText;
                    var meetingPlace = this.closest('tr').querySelector('td:nth-child(6)').innerText;
            
                    // Mengirim data ke halaman selanjutnya
                    window.location.href = '/signaturepad?date=' + meetingDate + '&time=' + meetingTime + '&place=' + meetingPlace;
                  });
                });
              });
            </script>
            
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var buttons = document.querySelectorAll('.hadir-button');

    buttons.forEach(function (button) {
      var meetingDate = button.closest('tr').querySelector('td:nth-child(4)').innerText;
      var meetingTime = button.closest('tr').querySelector('td:nth-child(5)').innerText;

      // Parse the date and time to compare with the current date and time
      var meetingDateTime = new Date(meetingDate + ' ' + meetingTime);
      var currentDate = new Date();

      if (meetingDateTime > currentDate) {
        // Meeting hasn't started yet, set a color
        button.classList.add('btn-warning'); // Change to your desired color class
      } else if (meetingDateTime < currentDate) {
        // Meeting has already concluded, set a different color
        button.classList.add('btn-secondary'); // Change to your desired color class
        button.disabled = true; // Optionally disable the button
      } else {
        // Meeting is ongoing, set another color
        button.classList.add('btn-primary'); // Change to your desired color class
      }
    });
  });
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