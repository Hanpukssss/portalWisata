<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>WiKa - About Us</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/portal-custom.css') }}">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <ul class="nav">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}" class="active">About</a></li>
                        <li><a href="{{ route('deals') }}">Deals</a></li>
                        <li><a href="{{ route('reservation') }}">Reservation</a></li>
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            @if(auth()->user()->role === 'user')
                                <li><a href="{{ route('orders.history') }}">Pesanan Saya</a></li>
                            @endif
                            <li><a href="#" onclick="document.getElementById('logout-form-about').submit()">Logout</a></li>
                            <form id="logout-form-about" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
                        @endguest
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <div class="about-main-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="content">
            <div class="blur-bg"></div>
            <h4>Kunjungi Kota Kami</h4>
            <div class="line-dec"></div>
            <h2>Welcome To Kediri</h2>
            <p>Kediri adalah sebuah wilayah di Jawa Timur yang memadukan sejarah besar Kerajaan Kediri dengan kemajuan industri modern. Terletak di antara kemegahan Gunung Kelud dan Gunung Wilis, kota ini menawarkan kekayaan wisata alam yang asri, situs sejarah yang ikonik, hingga kuliner khas seperti Tahu Takwa. Dengan Monumen Simpang Lima Gumul sebagai ikon kebanggaannya, Kediri menjadi destinasi lengkap yang menyuguhkan pengalaman wisata alam, budaya, dan kuliner dalam satu tempat yang ramah bagi setiap pelancong.</p>
            <div class="main-button">
              <a href="{{ route('home') }}#data-wisata">Lihat Destinasi</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->

  <!-- Seksi carousel kota dihapus untuk fokus pada konten tentang portal -->


  <div class="more-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Tentang WIKA</h2>
            <p>Portal Wisata Kediri (WIKA) dibuat untuk memudahkan Anda menemukan, memesan, dan mengelola kunjungan ke destinasi wisata Kediri.</p>
          </div>
          <ul class="list-unstyled text-muted">
            <li class="mb-2"><i class="fa fa-check text-primary"></i> Data destinasi langsung dari admin Kediri</li>
            <li class="mb-2"><i class="fa fa-check text-primary"></i> Pemesanan tiket online untuk user terdaftar</li>
            <li class="mb-2"><i class="fa fa-check text-primary"></i> Dashboard admin untuk kelola kategori, tempat, dan pesanan</li>
          </ul>
          <div class="main-button">
            <a href="{{ route('home') }}#data-wisata">Lihat Destinasi</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Kediri Sekilas</h2>
            <p>Kediri dikenal dengan ikon Simpang Lima Gumul, panorama Gunung Kelud, dan kekayaan budaya seperti Goa Selomangleng. Banyak pilihan wisata alam, edukasi, dan keluarga.</p>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="info-item">
                <h4>50+</h4>
                <span>Spot wisata</span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-item">
                <h4>200K+</h4>
                <span>Pengunjung/tahun</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="call-to-action">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2>Siap Berkunjung?</h2>
          <h4>Langsung buka halaman reservasi untuk memesan tiket.</h4>
        </div>
        <div class="col-lg-4 text-lg-end">
          <div class="border-button">
            <a href="{{ route('reservation') }}">Ke Halaman Reservasi</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-section">
    <div class="container">
      <div class="contact-card row g-4 align-items-start">
        <div class="col-lg-6">
          <h4 class="mb-3">Hubungi Kami</h4>
          <p class="text-muted mb-3">Portal Wisata Kediri siap membantu kebutuhan informasi destinasi dan pemesanan tiket.</p>
          <ul class="list-unstyled contact-list">
            <li class="mb-2"><i class="fa fa-map-marker"></i> Jl. Pahlawan Kusuma Bangsa, Kediri</li>
            <li class="mb-2"><i class="fa fa-phone"></i> 0354-xxxxxxx</li>
            <li class="mb-2"><i class="fa fa-envelope"></i> info@wisatakediri.test</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <h4 class="mb-3">Peta Kediri</h4>
          <div class="map-frame">
            <div class="ratio ratio-16x9">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0455939040805!2d112.01213921429084!3d-7.838426279635802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78804c0e32f9a9%3A0x56d28a741b93d7b4!2sSimpang%20Lima%20Gumul!5e0!3m2!1sen!2sid!4v1703613200000!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2026 <a href="#">Portal Wisata Kediri</a>. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active");
    });
  </script>

  </body>

</html>

