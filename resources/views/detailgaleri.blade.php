<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DETAIL DESA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('land-bt/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('land-bt/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('land-bt/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('land-bt/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('land-bt/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('land-bt/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('land-bt/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('land-bt/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bethany
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="{{route('home')}}"><span>AGRIMAP</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link" href="{{route('home')}}#hero">Home</a></li>
            <li><a class="nav-link" href="{{route('home')}}#services">Layanan</a></li>
            <li><a class="nav-link" href="{{route('home')}}#portfolio">Galeri</a></li>
            <li><a class="nav-link" href="{{route('pengaduan')}}">Pengaduan</a></li>
            <li><a class="nav-link" href="{{route('home')}}#contact">Peta</a></li>
            <li><a class="nav-link scrollto" href="#footer">Kontak</a></li>
            <li><a class="getstarted scrollto" href="{{route('login')}}">Login</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detail Desa</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Detail Desa</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        @foreach($related_galeris as $related_galeri)
        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ $related_galeri->img_source }}" alt="">
                </div>
{{--
                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-details-3.jpg" alt="">
                </div> --}}

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>INFORMASI DESA</h3>
              <ul>
                <li><strong>Nama Desa</strong>: {{ $related_galeri->nama_desa }}</li>
                <li><strong>Alamat Kantor Desa</strong>: {{ $related_galeri->alamat }}</li>
                <li><strong>Provinsi</strong>: Bandung {{ $related_galeri->provinsi }}</li>
                <li><strong>Sumber daya Desa </strong>: <a href="#">{{ $related_galeri->sumber_daya }}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Deskripsi Desa</h2>
              <p>
                {!! $related_galeri->deskripsi_desa !!}
              </p>
            </div>
          </div>

        </div>
        @endforeach
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>AGRIMAP</h3>
        <p>
          Jalan Telekomunikasi <br>
          Kabupaten Bandung, Jawa Barat 40257<br>
          Indonesia <br><br>
          <strong>Phone:</strong> 0812345678<br>
          <strong>Email:</strong> agrimap@gatau.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>

          <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Galeri</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('artikel')}}">Artikel</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#services">Layanan</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Layanan Kami</h4>
        <ul>

          <li><i class="bx bx-chevron-right"></i> <a href="{{route('pengaduan')}}">Lapak Pengaduan</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#contact">Peta Sumber daya</a></li>

          <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Artikel Kami</h4>
        <p>Lihat berita terbaru dari berbagai desa di Indonesia</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Log In">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>Agrimap</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('land-bt/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('land-bt/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('land-bt/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('land-bt/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('land-bt/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('land-bt/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('land-bt/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('land-bt/assets/js/main.js')}}"></script>

</body>

</html>
