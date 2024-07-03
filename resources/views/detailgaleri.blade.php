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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('land-bt/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('land-bt/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('land-bt/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('land-bt/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('land-bt/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('land-bt/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('land-bt/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Leaflet map -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        #map {
            height: 400px;
        }

        /* ukuran map */
    </style>

    <!-- Template Main CSS File -->
    <link href="{{ asset('land-bt/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bethany
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    ini nyoba create branch from

    Halo apa kabar semuanya

    nyoba checkout

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
            <div class="header-container d-flex align-items-center justify-content-between">
                <div class="logo">
                    <h1 class="text-light"><a href="{{ route('home') }}"><span>AGRIMAP</span></a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                </div>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link" href="{{ route('home') }}#hero">Home</a></li>
                        <li><a class="nav-link" href="{{ route('home') }}#services">Layanan</a></li>
                        <li><a class="nav-link" href="{{ route('home') }}#portfolio">Galeri</a></li>
                        <li><a class="nav-link" href="{{ route('pengaduan') }}">Pengaduan</a></li>
                        <li><a class="nav-link" href="{{ route('home') }}#contact">Peta</a></li>
                        <li><a class="nav-link scrollto" href="#footer">Kontak</a></li>
                        <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
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
                @foreach ($related_galeris as $related_galeri)
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
                                    <li><strong>Provinsi</strong>: Bandung {{ ucwords($related_galeri->provinsi) }}
                                    </li>
                                    <li><strong>Sumber daya Desa </strong>: <a
                                            href="{{ $related_galeri->sumber_daya }}">{{ $related_galeri->sumber_daya }}</a>
                                    </li>
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

        <!-- ======= Contact Section ======= -->
        <section id="peta" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="peta">
                            @foreach ($related_galeris as $related_galeri)
                                <h2>Peta Wilayah <br><b>{{ $related_galeri->nama_desa }}</b></h2>
                            @endforeach

                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">

                        <!-- Div for the map -->
                        <div id="map">
                        </div>

                        <!-- Leaflet JS code -->
                        <script>
                            @foreach ($related_galeris as $realated_galeri)
                                var map = L.map('map').setView([-{{ $related_galeri->lintang }}, {{ $related_galeri->bujur }}], 15);
                                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                                }).addTo(map);
                                L.marker([-{{ $related_galeri->lintang }}, {{ $related_galeri->bujur }}]).addTo(map)
                                    .bindPopup(
                                        "{{ $related_galeri->nama_desa }}, <br>{{ $related_galeri->alamat }},<br>Bandung {{ ucwords($related_galeri->provinsi) }}"
                                    )
                                    .openPopup();
                            @endforeach
                        </script>

                        <!--{{-- <script>
                  var map = L.map('map').setView([51.505, -0.09], 13);

                  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                  }).addTo(map);
                  L.marker([-{{ $galeri->lintang }}, {{ $galeri->bujur }}]).addTo(map)
                      .bindPopup("{{ $galeri->nama_desa }}. <a href='{{ route('galeri.show', $galeri->slug) }}'>detail desa</a>")
                      .openPopup();

                  // L.marker([-6.974774405406255, 107.63958990948215]).addTo(map)
                  //     .bindPopup('Kantor Desa Lengkong')
                  //     .openPopup();

                  // L.marker([-7.000795164946833, 107.64788692112525]).addTo(map)
                  //     .bindPopup('Kantor Desa Bojongsari')
                  //     .openPopup();

                  // L.marker([-6.967001348033594, 107.63735957879616]).addTo(map)
                  //     .bindPopup('Kantor Desa Cipagalo')
                  //     .openPopup();

                  // L.marker([-6.982947614005201, 107.69391788064658]).addTo(map)
                  //     .bindPopup('Kantor Desa Tegalluar')
                  //     .openPopup();

                  // L.marker([-6.976148501732319, 107.67153939088546]).addTo(map)
                  //     .bindPopup('Kantor Desa Buah Batu')
                  //     .openPopup();


              </script> --}}
  -->
                        <!--iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe-->
                        <!-- <div class="info mt-4">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
              <div class="row">
                <div class="col-lg-6 mt-4">
                  <div class="info">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>info@example.com</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="info w-100 mt-4">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>+1 5589 55488 55s</p>
                  </div>
                </div> -->
                    </div>
                    <br><br><br><br>


                    <!-- <h3>Lapak Pengaduan</h3>

              <form action="{{ asset('land-bt/forms/contact.php') }}" method="post" role="form" class="php-email-form mt-4">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>

          </div> -->

                </div>
        </section><!-- End Contact Section -->

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
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>

                            <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Galeri</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('artikel') }}">Artikel</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Layanan</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Layanan Kami</h4>
                        <ul>

                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('pengaduan') }}">Lapak
                                    Pengaduan</a></li>
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('land-bt/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('land-bt/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('land-bt/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('land-bt/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('land-bt/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('land-bt/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('land-bt/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('land-bt/assets/js/main.js') }}"></script>

</body>

</html>
