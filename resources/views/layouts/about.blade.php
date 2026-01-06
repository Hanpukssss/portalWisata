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
  <header class="header-area header-sticky" style="background: linear-gradient(90deg, #0b5568, #0e96b2);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
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
                    <!-- ***** Menu End ***** -->
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
              <a href="/reservation">Discover More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->

  <div class="cities-town">
    <div class="container">
      <div class="row">
        <div class="slider-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Kediri <em>Cities &amp; Towns</em></h2>
            </div>
            <div class="col-lg-12">
              <div class="owl-cites-town owl-carousel">
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-01.jpg" alt="">
                    <h4>Simpang Lima Gumul</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-02.jpg" alt="">
                    <h4>Gunung Kelud</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-03.jpg" alt="">
                    <h4>Gunung Kelud</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-04.jpg" alt="">
                    <h4>Simpang Lima Gumul</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-01.jpg" alt="">
                    <h4>Air Terjun Dolo</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-02.jpg" alt="">
                    <h4>Goa Selomangkleng</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-03.jpg" alt="">
                    <h4>gunung wilis</h4>
                  </div>
                </div>
                <div class="item">
                  <div class="thumb">
                    <img src="assets/images/cities-04.jpg" alt="">
                    <h4>Gumul Paradise Island</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="weekly-offers">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Penawaran Mingguan Terbaik di Setiap Kota</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-weekly-offers owl-carousel">
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-01.jpg" alt="">
                <div class="text">
                  <h4>Simpang Lima gumul<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                  <h6>Rp.15.000<br><span>/person</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                    <a href="/reservation">Make a Reservation</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-02.jpg" alt="">
                <div class="text">
                  <h4>Gunung Kelud<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                  <h6>Rp.100.000<br><span>/person</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                    <a href="/reservation">Make a Reservation</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-03.jpg" alt="">
                <div class="text">
                  <h4>Air Terjun dolo<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                  <h6>Rp.18.000<br><span>/person</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                     <a href="/reservation">Buat Reservasi</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-01.jpg" alt="">
                <div class="text">
                  <h4>Gunung Kelud<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                  <h6>Rp15.000<br><span>/orang</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                    <a href="/reservation">Make a Reservation</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-02.jpg" alt="">
                <div class="text">
                  <h4>Simpang Lima Gumul<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                  <h6>Gratis<br><span>/pengunjung</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                    <a href="/reservation">Make a Reservation</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/offers-03.jpg" alt="">
                <div class="text">
                  <h4>George Town<br><span><i class="fa fa-users"></i> 234 Check Ins</span></h4>
                  <h6>$420<br><span>/person</span></h6>
                  <div class="line-dec"></div>
                  <ul>
                    <li>Deal Includes:</li>
                    <li><i class="fa fa-taxi"></i> 5 Days Trip > Hotel Included</li>
                    <li><i class="fa fa-plane"></i> Airplane Bill Included</li>
                    <li><i class="fa fa-building"></i> Daily Places Visit</li>
                  </ul>
                  <div class="main-button">
                    <a href="/reservation">Make a Reservation</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-image">
            <img src="assets/images/about-left-image.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Kenali Kediri Lebih Dekat</h2>
            <p>Dari wisata alam sampai budaya, Kediri menawarkan pengalaman lengkap untuk keluarga dan petualang.</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="info-item">
                <h4>150K+</h4>
                <span>Pengunjung tiap tahun</span>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-item">
                <h4>175+</h4>
                <span>Penginapan & homestay</span>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="info-item">
                <div class="row">
                  <div class="col-lg-6">
                    <h4>50+</h4>
                    <span>Spot wisata</span>
                  </div>
                  <div class="col-lg-6">
                    <h4>240K+</h4>
                    <span>Kunjungan tahunan</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p>Data di atas merangkum potensi wisata Kediri yang terus tumbuh. Cek halaman deals untuk melihat destinasi yang tersedia.</p>
          <div class="main-button">
            <a href="{{ route('reservation') }}">Discover More</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2>Are You Looking To Travel ?</h2>
          <h4>Make A Reservation By Clicking The Button</h4>
        </div>
        <div class="col-lg-4">
          <div class="border-button">
            <a href="/reservation">Book Yours Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info reservation-info" style="background:#f8f9fa;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h4 class="mb-3">Hubungi Kami</h4>
          <p>Portal Wisata Kediri siap membantu kebutuhan informasi destinasi dan pemesanan tiket.</p>
          <ul class="list-unstyled">
            <li class="mb-2"><i class="fa fa-map-marker"></i> Jl. Pahlawan Kusuma Bangsa, Kediri</li>
            <li class="mb-2"><i class="fa fa-phone"></i> 0354-xxxxxxx</li>
            <li class="mb-2"><i class="fa fa-envelope"></i> info@wisatakediri.test</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <h4 class="mb-3">Peta Kediri</h4>
          <div class="ratio ratio-16x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0455939040805!2d112.01213921429084!3d-7.838426279635802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78804c0e32f9a9%3A0x56d28a741b93d7b4!2sSimpang%20Lima%20Gumul!5e0!3m2!1sen!2sid!4v1703613200000!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
