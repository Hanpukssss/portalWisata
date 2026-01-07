<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>WiKa - Reservation</title>

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
                        <li><a href="{{ route('deals') }}">Deals</a></li>
                        <li><a href="{{ route('reservation') }}" class="active">Reservation</a></li>
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            @if(auth()->user()->role === 'user')
                                <li><a href="{{ route('orders.history') }}">Pesanan Saya</a></li>
                            @endif
                            <li><a href="#" onclick="event.preventDefault();document.getElementById('logout-form-resv').submit();">Logout</a></li>
                            <form id="logout-form-resv" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
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

  <div class="second-page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Pesan Penawaran Khusus di Kediri</h4>
          <h2>Lakukan Reservasi Anda</h2>
          <p>Pilih destinasi wisata Kediri favorit, atur tanggal kunjungan, dan pesan tiket langsung.</p>
          <div class="main-button"><a href="/about">Temukan Selengkapnya</a></div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info reservation-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-phone"></i>
            <h4>Make a Phone Call</h4>
            <a href="#">+123 456 789 (0)</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-envelope"></i>
            <h4>Contact Us via Email</h4>
            <a href="#">company@email.com</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-map-marker"></i>
            <h4>Visit Our Offices</h4>
            <a href="#">Jl. Pahlawan Kusuma Bangsa, Kediri</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="reservation-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0455939040805!2d112.01213921429084!3d-7.838426279635802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78804c0e32f9a9%3A0x56d28a741b93d7b4!2sSimpang%20Lima%20Gumul!5e0!3m2!1sen!2sid!4v1703613200000!5m2!1sen!2sid" width="100%" height="450px" frameborder="0" style="border:0; border-top-left-radius: 23px; border-top-right-radius: 23px;" allowfullscreen=""></iframe>
                </div>
        </div>
        <div class="col-lg-12">
          @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif
          @if ($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
          @endif

          @auth
            @if(auth()->user()->role === 'user')
              <form id="reservation-form" method="POST" action="{{ route('orders.store') }}">
                @csrf
                <div class="row">
                  <div class="col-lg-12">
                    <h4>Pesan tiket destinasi Kediri</h4>
                  </div>
                  <div class="col-lg-6">
                      <fieldset>
                          <label class="form-label">Nama Anda</label>
                          <input type="text" class="form-control" value="{{ auth()->user()->name }}" disabled>
                      </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" value="{{ auth()->user()->email }}" disabled>
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                      <fieldset>
                          <label class="form-label">Jumlah Tiket</label>
                          <input type="number" name="quantity" class="form-control" min="1" max="20" value="1" required>
                      </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                        <label class="form-label">Tanggal Kunjungan</label>
                        <input type="date" name="visit_date" class="form-control" value="{{ now()->format('Y-m-d') }}" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                      <fieldset>
                          <label class="form-label">Pilih Destinasi Anda</label>
                          @php $destinations = \App\Models\TouristPlace::with('category')->orderBy('name')->get(); @endphp
                          <select name="tourist_place_id" class="form-select" required>
                              @forelse($destinations as $place)
                                  <option value="{{ $place->id }}">
                                      {{ $place->name }} {{ $place->category ? '('.$place->category->name.')' : '' }}
                                  </option>
                              @empty
                                  <option disabled>Belum ada data destinasi</option>
                              @endforelse
                          </select>
                      </fieldset>
                  </div>
                  <div class="col-lg-12">
                      <fieldset>
                          <button class="main-button" type="submit">Pesan Sekarang</button>
                      </fieldset>
                  </div>
                </div>
              </form>
            @else
              <div class="alert alert-warning">Login sebagai user untuk memesan tiket.</div>
            @endif
          @endauth

          @guest
            <div class="alert alert-info">
              Silakan <a href="{{ route('login') }}">login sebagai user</a> untuk melakukan pemesanan.
            </div>
          @endguest
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

