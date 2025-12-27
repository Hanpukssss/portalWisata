<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Wisata Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    @stack('styles')
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-semibold" href="{{ route('admin.dashboard') }}">Portal Wisata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarAdmin">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="bi bi-speedometer2 me-1"></i>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.categories.index') }}"><i class="bi bi-tags me-1"></i>Kategori</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.places.index') }}"><i class="bi bi-geo-alt me-1"></i>Tempat Wisata</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.orders.index') }}"><i class="bi bi-ticket-perforated me-1"></i>Pesanan</a></li>
                </ul>
                <form method="POST" action="{{ route('admin.logout') }}" class="d-flex">
                    @csrf
                    <span class="navbar-text text-white me-3">
                        {{ auth()->user()->name ?? 'Admin' }}
                    </span>
                    <button class="btn btn-outline-light btn-sm" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
