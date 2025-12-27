@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <div>
        <h4 class="mb-1">Pesanan Tiket</h4>
        <p class="text-muted mb-0">Daftar pemesanan dari user.</p>
    </div>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Tempat Wisata</th>
                        <th>Tanggal</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration + ($orders->currentPage()-1)*$orders->perPage() }}</td>
                            <td>{{ $order->user->name ?? '-' }} <div class="text-muted small">{{ $order->user->email ?? '' }}</div></td>
                            <td>{{ $order->touristPlace->name ?? '-' }}</td>
                            <td>{{ \Carbon\Carbon::parse($order->visit_date)->format('d M Y') }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>Rp {{ number_format($order->total_price,0,',','.') }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-sm btn-outline-secondary">Detail</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">Belum ada pesanan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $orders->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
