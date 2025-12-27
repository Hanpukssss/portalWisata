@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <div>
        <h4 class="mb-1">Dashboard</h4>
        <p class="text-muted mb-0">Ringkasan data yang terhubung ke database.</p>
    </div>
    <a href="{{ route('admin.places.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg me-1"></i>Tambah Tempat
    </a>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-body d-flex align-items-center">
                <div class="bg-primary bg-opacity-10 text-primary rounded p-3 me-3">
                    <i class="bi bi-tags-fill fs-3"></i>
                </div>
                <div>
                    <div class="text-muted small">Kategori</div>
                    <div class="h4 mb-0">{{ $categories }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-body d-flex align-items-center">
                <div class="bg-success bg-opacity-10 text-success rounded p-3 me-3">
                    <i class="bi bi-geo-alt-fill fs-3"></i>
                </div>
                <div>
                    <div class="text-muted small">Tempat Wisata</div>
                    <div class="h4 mb-0">{{ $places }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-body d-flex align-items-center">
                <div class="bg-warning bg-opacity-10 text-warning rounded p-3 me-3">
                    <i class="bi bi-ticket-perforated-fill fs-3"></i>
                </div>
                <div>
                    <div class="text-muted small">Pesanan Tiket</div>
                    <div class="h4 mb-0">{{ $orders }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-3 mt-2">
    <div class="col-lg-6">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-header bg-white fw-semibold">Kategori Terbaru</div>
            <div class="card-body">
                @php $latestCategories = \App\Models\Category::latest()->take(5)->get(); @endphp
                <ul class="list-group list-group-flush">
                    @forelse($latestCategories as $cat)
                        <li class="list-group-item d-flex justify-content-between">
                            <span>{{ $cat->name }}</span>
                            <span class="text-muted small">{{ $cat->created_at->format('d M Y') }}</span>
                        </li>
                    @empty
                        <li class="list-group-item text-muted">Belum ada data.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-header bg-white fw-semibold">Tempat Wisata Terbaru</div>
            <div class="card-body">
                @php $latestPlaces = \App\Models\TouristPlace::with('category')->latest()->take(5)->get(); @endphp
                <ul class="list-group list-group-flush">
                    @forelse($latestPlaces as $place)
                        <li class="list-group-item">
                            <div class="fw-semibold">{{ $place->name }}</div>
                            <div class="text-muted small">
                                {{ $place->category->name ?? '-' }} • {{ $place->location ?: 'Lokasi belum diisi' }}
                            </div>
                        </li>
                    @empty
                        <li class="list-group-item text-muted">Belum ada data.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
