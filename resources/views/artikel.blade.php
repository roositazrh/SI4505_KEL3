<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ARTIKEL</title>
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
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Artikel</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Artikel</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-left">
        <h2>Artikel Desa</h2>
        <p>Artikel - artikel dari berbagai desa</p>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($artikels as $artikel)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <div class="fixed-box"> <!-- Add fixed-box class here -->
                  <img src="{{ $artikel->img_source }}" class="img-fluid fixed-size" alt="Thumbnail for {{ $artikel->title }}" border="0" />
              </div>
              <div class="portfolio-info">
                <h4>{{ $artikel->title }}</h4>
                <div class="portfolio-links">
                  <a href="{{ $artikel->thumbnail }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $artikel->title }}"><i class="bx bx-plus"></i></a>
                  <a href="{{ route('artikel.show', $artikel->slug) }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
      </div>

    </div>
  </section><!-- End Portfolio Section -->

    </section>

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
