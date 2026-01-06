<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Saya | Portal Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Portal Wisata</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('reservation') }}">Reservation</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('orders.history') }}">Pesanan Saya</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h4 class="mb-1">Pesanan Saya</h4>
                <p class="text-muted mb-0">Riwayat pemesanan tiket destinasi Kediri.</p>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Destinasi</th>
                                <th>Tanggal Pesan</th>
                                <th>Tanggal</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orders as $order)
                                <tr>
                                    <td>{{ $loop->iteration + ($orders->currentPage()-1)*$orders->perPage() }}</td>
                                    <td>{{ $order->touristPlace->name ?? '-' }}</td>
                                    <td>{{ $order->created_at->format('d M Y H:i') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($order->visit_date)->format('d M Y') }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>Rp {{ number_format($order->total_price,0,',','.') }}</td>
                                    <td>
                                        <span class="badge
                                            @if($order->status==='selesai') bg-success
                                            @elseif($order->status==='proses') bg-warning text-dark
                                            @else bg-secondary
                                            @endif">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">Belum ada pesanan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $orders->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
