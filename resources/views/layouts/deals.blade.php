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
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h4>Katalog Destinasi Kediri</h4>
          <h2>Pilih yang ingin Anda kunjungi</h2>
          <p class="text-white">Baca highlight tiap destinasi, lalu lanjutkan pesan tiket melalui halaman reservasi.</p>
          <div class="border-button"><a href="{{ route('reservation') }}">Buka Halaman Reservasi</a></div>
        </div>
      </div>
    </div>
  </div>

  <div class="amazing-deals">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Destinasi Unggulan</h2>
            <p>Data diambil dari destinasi yang sudah diinput admin.</p>
          </div>
        </div>
      </div>

      @php
        $placesCollection = ($places ?? collect());
      @endphp

      <div class="row gy-4">
        @forelse($placesCollection as $place)
          @php
            $fallback = asset('assets/images/country-01.jpg');
            $imagePath = $place->image ? 'storage/'.$place->image : null;
            $imageUrl = $fallback;
            if ($imagePath && \Illuminate\Support\Facades\Storage::disk('public')->exists($place->image)) {
                $imageUrl = asset($imagePath);
            }
          @endphp
          <div class="col-lg-12">
            <div class="card border-0 shadow-sm h-100">
              <div class="row g-0">
                <div class="col-md-5">
                  <img src="{{ $imageUrl }}" alt="{{ $place->name }}" class="w-100 h-100" style="object-fit:cover; border-top-left-radius:12px; border-bottom-left-radius:12px;">
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                    <span class="badge bg-secondary mb-2">{{ $place->category->name ?? 'Destinasi Kediri' }}</span>
                    <h4 class="mb-2">{{ $place->name }}</h4>
                    <p class="text-muted">{{ $place->description ?? 'Wisata Kediri.' }}</p>
                    <div class="row text-muted small mb-2">
                      <div class="col-4"><i class="fa fa-clock"></i> {{ $place->open_time ?? '00:00' }} - {{ $place->close_time ?? '24:00' }}</div>
                      <div class="col-4"><i class="fa fa-map-marker"></i> {{ $place->location ?? 'Kediri' }}</div>
                      <div class="col-4"><i class="fa fa-ticket"></i> Rp {{ number_format($place->ticket_price ?? 0,0,',','.') }}</div>
                    </div>
                    <div class="row text-muted small mb-3">
                      <div class="col-12"><i class="fa fa-info-circle"></i> Rekomendasi: kunjungi saat cuaca cerah, siapkan kamera untuk spot terbaik.</div>
                    </div>
                    <a class="btn btn-outline-primary" href="{{ route('home') }}#data-wisata">Lihat detail di beranda</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12">
            <div class="alert alert-warning mb-0">Belum ada data destinasi. Silakan tambah lewat admin.</div>
          </div>
        @endforelse
      </div>
    </div>
  </div>

  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2>Ingin pesan tiket?</h2>
          <h4>Klik tombol untuk ke halaman pemesanan.</h4>
        </div>
        <div class="col-lg-4">
          <div class="border-button">
            <a href="{{ route('reservation') }}">Buka halaman reservasi</a>
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

