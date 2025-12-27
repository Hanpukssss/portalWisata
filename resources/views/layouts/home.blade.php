<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Wisata Kediri</title>

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-woox-travel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

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
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('about') }}" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('deals') }}">Deals</a></li>
                        <li><a href="{{ route('reservation') }}">Reservation</a></li>
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <li><a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
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

  <div class="container mt-4">
    @if (session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if ($errors->any())
      <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif
  </div>

  <!-- ***** Main Banner Area Start ***** -->
  <section id="section-1">
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <input type="radio" id="banner2" class="sec-1-input" name="banner">
      <input type="radio" id="banner3" class="sec-1-input" name="banner">
      <input type="radio" id="banner4" class="sec-1-input" name="banner">
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Mari kita lihat keindahan kota ini:</h2>
              <h1>Simpang Lima Gumul</h1>
              <div class="border-button">
                <a href="{{ route('about') }}">Ayo Berkunjung</a>
                </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Population:</span><br>44.48 M</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span>Territory:</span><br>275.400 KM<em>2</em></h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>AVG Price:</span><br>Rp.100.000</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <div class="main-button">
                          <a href="{{ route('about') }}">Jelajahi Lainya</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-2" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Mari kita lihat keindahan kota ini:</h2>
              <h1>Gunung Kelud</h1>
              <div class="border-button">
                <a href="{{ route('about') }}">Ayo Berkunjung</a>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Population:</span><br>8.66 M</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span>Territory:</span><br>41.290 KM<em>2</em></h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>AVG Price:</span><br>Rp.100.000</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <div class="main-button">
                          <a href="{{ route('about') }}">Jelajahi Lainya</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-3" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Mari kita lihat keindahan kota ini:</h2>
              <h1>Air Terjun Dolo</h1>
              <div class="border-button">
                <a href="{{ route('about') }}">Ayo Berkunjung</a>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Population:</span><br>67.41 M</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span>Territory:</span><br>551.500 KM<em>2</em></h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>AVG Price:</span><br>Rp.100.000</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <div class="main-button">
                          <a href="{{ route('about') }}">Jelajahi Lainya</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-4" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <h2>Mari kita lihat keindahan kota ini:</h2>
              <h1>Goa Selomangkleng</h1>
              <div class="border-button">
                <a href="{{ route('about') }}">Ayo Berkunjung</a>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span>Population:</span><br>69.86 M</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span>Territory:</span><br>513.120 KM<em>2</em></h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span>AVG Price:</span><br>Rp.100.000</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <div class="main-button">
                          <a href="{{ route('about') }}">Jelajahi Lainya</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="controls">
          <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">1</span></label>
          <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">2</span></label>
          <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">3</span></label>
          <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">4</span></label>
        </div>
      </nav>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="py-5 bg-light">
    <div class="container">
      <div class="row align-items-center mb-4">
        <div class="col-lg-8">
          <h2 class="mb-1">Data Tempat Wisata</h2>
          <p class="text-muted mb-0">Menampilkan data yang tersimpan di database.</p>
        </div>
        <div class="col-lg-4">
          <form method="GET" action="{{ route('home') }}" class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Cari nama atau lokasi" value="{{ $q ?? '' }}">
            <button class="btn btn-primary" type="submit">Cari</button>
          </form>
        </div>
      </div>
      <div class="row">
        @forelse($places ?? collect() as $place)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
              <div class="position-relative" style="height: 200px; overflow: hidden;">
                @php
                  $fallback = asset('assets/images/country-01.jpg');
                  $imagePath = $place->image ? 'storage/'.$place->image : null;
                  $imageUrl = $fallback;
                  if ($imagePath && \Illuminate\Support\Facades\Storage::disk('public')->exists($place->image)) {
                      $imageUrl = asset($imagePath);
                  }
                @endphp
                <img src="{{ $imageUrl }}" alt="{{ $place->name }}" class="w-100 h-100" style="object-fit: cover;">
              </div>
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                  <div>
                    <span class="badge bg-secondary">{{ $place->category->name ?? 'Tidak ada kategori' }}</span>
                    <h5 class="mb-0 mt-1">{{ $place->name }}</h5>
                  </div>
                  <small class="text-muted">{{ $place->open_time ?: '00:00' }} - {{ $place->close_time ?: '24:00' }}</small>
                </div>
                <p class="text-muted small mb-2">{{ \Illuminate\Support\Str::limit($place->description ?? 'Belum ada deskripsi', 120) }}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="text-muted"><i class="fa fa-map-marker"></i> {{ $place->location ?? 'Lokasi belum diisi' }}</span>
                  <span class="fw-bold">Rp {{ number_format($place->ticket_price ?? 0,0,',','.') }}</span>
                </div>
              </div>
              <div class="card-footer bg-white border-0">
                <a href="{{ route('place.show',$place->slug) }}" class="text-decoration-none">Detail tempat &rarr;</a>
                @auth
                  @if(auth()->user()->role === 'user')
                    <form method="POST" action="{{ route('orders.store') }}" class="mt-2">
                      @csrf
                      <input type="hidden" name="tourist_place_id" value="{{ $place->id }}">
                      <div class="row g-2 align-items-center">
                        <div class="col">
                          <input type="date" name="visit_date" value="{{ now()->format('Y-m-d') }}" class="form-control form-control-sm" required>
                        </div>
                        <div class="col-auto">
                          <input type="number" name="quantity" min="1" max="20" value="1" class="form-control form-control-sm" style="width: 90px;" required>
                        </div>
                        <div class="col-auto">
                          <button class="btn btn-sm btn-primary" type="submit">Pesan</button>
                        </div>
                      </div>
                    </form>
                  @endif
                @else
                  <div class="mt-2">
                    <a href="{{ route('login') }}" class="text-decoration-none">Login untuk pesan tiket</a>
                  </div>
                @endauth
              </div>
            </div>
          </div>
        @empty
          <div class="col-12">
            <div class="alert alert-warning mb-0">Belum ada data tempat wisata di database.</div>
          </div>
        @endforelse
      </div>
      @if(isset($places) && $places instanceof \Illuminate\Pagination\AbstractPaginator)
        <div class="mt-4">
          {{ $places->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
      @endif
    </div>
  </section>

  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2>Apakah Anda Berencana Bepergian ?</h2>
          <h4>Buat Reservasi Lewat Klik Tombol</h4>
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
          <p>Copyright © 2025 <a href="#">Wisata Kediri</a> Company. All rights reserved.
        </div>
      </div>
    </div>
  </footer>


<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/tabs.js') }}"></script>
<script src="{{ asset('assets/js/popup.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>


  <script>
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });
  </script>

  </body>

</html>
