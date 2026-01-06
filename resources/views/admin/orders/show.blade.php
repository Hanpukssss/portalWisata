@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Detail Pesanan #{{ $order->id }}</h4>
    <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-header bg-white fw-semibold">Informasi User</div>
            <div class="card-body">
                <div class="mb-2"><strong>Nama:</strong> {{ $order->user->name ?? '-' }}</div>
                <div class="mb-2"><strong>Email:</strong> {{ $order->user->email ?? '-' }}</div>
                <div class="mb-2"><strong>Role:</strong> {{ $order->user->role ?? '-' }}</div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-header bg-white fw-semibold">Informasi Pesanan</div>
            <div class="card-body">
                <div class="mb-2"><strong>Tempat Wisata:</strong> {{ $order->touristPlace->name ?? '-' }}</div>
                <div class="mb-2"><strong>Tanggal Kunjungan:</strong> {{ \Carbon\Carbon::parse($order->visit_date)->format('d M Y') }}</div>
                <div class="mb-2"><strong>Jumlah Tiket:</strong> {{ $order->quantity }}</div>
                <div class="mb-2"><strong>Total:</strong> Rp {{ number_format($order->total_price,0,',','.') }}</div>
                <div class="mb-2"><strong>Dipesan pada:</strong> {{ $order->created_at->format('d M Y H:i') }}</div>
                <div class="mt-3">
                    <form action="{{ route('admin.orders.update', $order) }}" method="POST" class="d-flex align-items-center gap-2">
                        @csrf
                        @method('PUT')
                        <label class="form-label mb-0"><strong>Status:</strong></label>
                        <select name="status" class="form-select form-select-sm" style="max-width: 200px;" onchange="this.form.submit()">
                            <option value="baru" @selected($order->status==='baru')>Baru</option>
                            <option value="proses" @selected($order->status==='proses')>Proses</option>
                            <option value="selesai" @selected($order->status==='selesai')>Selesai</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
