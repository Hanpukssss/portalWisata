@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <div>
        <h4 class="mb-1">Pesanan Tiket</h4>
        <p class="text-muted mb-0">Daftar pemesanan dari user.</p>
    </div>
    <div class="d-flex gap-2">
        <a href="{{ route('admin.orders.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-arrow-clockwise me-1"></i>Refresh
        </a>
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
                        <th>Status</th>
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
                            <td>
                                <form action="{{ route('admin.orders.update', $order) }}" method="POST" class="d-flex gap-2">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                                        <option value="baru" @selected($order->status==='baru')>Baru</option>
                                        <option value="proses" @selected($order->status==='proses')>Proses</option>
                                        <option value="selesai" @selected($order->status==='selesai')>Selesai</option>
                                    </select>
                                </form>
                            </td>
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
