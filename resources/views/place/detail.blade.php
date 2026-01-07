<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $place->name }} | Portal Wisata Kediri</title>
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/portal-custom.css') }}">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(90deg,#14c3cb,#1dd3c4);">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo" style="height:40px;" class="me-2">
            <span class="fw-semibold text-white">Portal Wisata Kediri</span>
        </a>
        <div>
            <a class="btn btn-outline-light btn-sm" href="{{ route('home') }}">Kembali</a>
        </div>
    </div>
</nav>

<div class="container py-4">
    <div class="row g-3">
        <div class="col-lg-6">
            @php
                $fallback = asset('assets/images/country-01.jpg');
                $imagePath = $place->image ? 'storage/'.$place->image : null;
                $imageUrl = $fallback;
                if ($imagePath && \Illuminate\Support\Facades\Storage::disk('public')->exists($place->image)) {
                    $imageUrl = asset($imagePath);
                }
            @endphp
            <img src="{{ $imageUrl }}" alt="{{ $place->name }}" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-lg-6">
            <h3 class="mb-1">{{ $place->name }}</h3>
            <span class="badge bg-secondary mb-2">{{ $place->category->name ?? 'Destinasi Kediri' }}</span>
            <p class="text-muted">{{ $place->description ?? 'Wisata Kediri.' }}</p>
            <ul class="list-unstyled text-muted mb-3">
                <li class="mb-1"><i class="fa fa-clock"></i> {{ $place->open_time ?? '00:00' }} - {{ $place->close_time ?? '24:00' }}</li>
                <li class="mb-1"><i class="fa fa-map-marker"></i> {{ $place->location ?? 'Kediri' }}</li>
                <li class="mb-1"><i class="fa fa-ticket"></i> Rp {{ number_format($place->ticket_price ?? 0,0,',','.') }}</li>
            </ul>
            <div class="text-muted mb-3"><i class="fa fa-info-circle"></i> Tips: kunjungi saat cuaca cerah, siapkan kamera untuk spot terbaik.</div>
            <a href="{{ route('reservation') }}" class="btn btn-primary">Pesan tiket destinasi ini</a>
        </div>
    </div>

    <div class="row g-4 mt-4">
        <div class="col-lg-8">
            <h5>Gambaran & Aktivitas</h5>
            <p class="text-muted">
                {{ $place->description ?? 'Destinasi wisata Kediri.' }}
            </p>
            <ul class="list-unstyled text-muted">
                <li class="mb-1"><i class="fa fa-check text-primary"></i> Rute terbaik: {{ $place->location ?? 'Kediri' }}</li>
                <li class="mb-1"><i class="fa fa-check text-primary"></i> Jam kunjungan ideal: {{ $place->open_time ?? '09:00' }} - {{ $place->close_time ?? '17:00' }}</li>
                <li class="mb-1"><i class="fa fa-check text-primary"></i> Disarankan: bawa kamera, pakaian nyaman, uang tunai untuk tiket/parkir.</li>
            </ul>
        </div>
        <div class="col-lg-4">
            <h5>Peta Singkat</h5>
            <div class="ratio ratio-16x9">
                <iframe src="https://www.google.com/maps?q={{ urlencode($place->location ?? 'Kediri') }}&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
