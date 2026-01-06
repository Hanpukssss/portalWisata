<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>WoOx Travel - Special Deals</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/portal-custom.css') }}">
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->
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
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('deals') }}" class="active">Deals</a></li>
                        <li><a href="{{ route('reservation') }}">Reservation</a></li>
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            @if(auth()->user()->role === 'user')
                                <li><a href="{{ route('orders.history') }}">Pesanan Saya</a></li>
                            @endif
                            <li><a href="#" onclick="document.getElementById('logout-form-deals').submit()">Logout</a></li>
                            <form id="logout-form-deals" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
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

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Temukan Penawaran Mingguan Kami</h4>
          <h2>Harga Luar Biasa &amp; Lainya</h2>
          <div class="border-button"><a href="{{ route('about') }}">Discover More</a></div>
        </div>
      </div>
    </div>
  </div>

  <div class="search-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="alert alert-info mb-0">
            Menampilkan penawaran destinasi wisata Kediri yang diinput admin.
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="amazing-deals">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Penawaran Wisata Kediri</h2>
            <p>Data diambil dari destinasi yang sudah diinput admin.</p>
          </div>
        </div>
        @foreach(($places ?? collect()) as $place)
          <div class="col-lg-6 col-sm-6">
            <div class="item">
              <div class="row">
                <div class="col-lg-6">
                  <div class="image" style="height:260px; overflow:hidden;">
                    @php
                      $fallback = asset('assets/images/country-01.jpg');
                      $imagePath = $place->image ? 'storage/'.$place->image : null;
                      $imageUrl = $fallback;
                      if ($imagePath && \Illuminate\Support\Facades\Storage::disk('public')->exists($place->image)) {
                          $imageUrl = asset($imagePath);
                      }
                    @endphp
                    <img src="{{ $imageUrl }}" alt="{{ $place->name }}" style="width:100%; height:100%; object-fit:cover;">
                  </div>
                </div>
                <div class="col-lg-6 align-self-center">
                  <div class="content">
                    <span class="info">{{ $place->category->name ?? 'Destinasi Kediri' }}</span>
                    <h4>{{ $place->name }}</h4>
                    <div class="row">
                      <div class="col-6">
                        <i class="fa fa-clock"></i>
                        <span class="list">{{ $place->open_time ?? '00:00' }} - {{ $place->close_time ?? '24:00' }}</span>
                      </div>
                      <div class="col-6">
                        <i class="fa fa-map"></i>
                        <span class="list">{{ $place->location ?? 'Kediri' }}</span>
                      </div>
                    </div>
                    <p>{{ \Illuminate\Support\Str::limit($place->description ?? 'Wisata Kediri.', 110) }}</p>
                    <div class="main-button">
                      <a href="{{ route('reservation') }}">Pesan sekarang</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        @if(($places ?? collect())->isEmpty())
          <div class="col-lg-12">
            <div class="alert alert-warning">Belum ada data destinasi. Silakan tambah lewat admin.</div>
          </div>
        @endif
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
            <a href="{{ route('reservation') }}">Book Yours Now</a>
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
