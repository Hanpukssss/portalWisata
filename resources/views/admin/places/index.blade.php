@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <div>
        <h4 class="mb-1">Tempat Wisata</h4>
        <p class="text-muted mb-0">Data ini ditarik langsung dari database.</p>
    </div>
    <a href="{{ route('admin.places.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg me-1"></i>Tambah Tempat
    </a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Lokasi</th>
                        <th>Tiket</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($places as $place)
                        <tr>
                            <td>{{ $loop->iteration + ($places->currentPage()-1)*$places->perPage() }}</td>
                            <td>
                                @if($place->image)
                                    <img src="{{ asset('storage/'.$place->image) }}" alt="{{ $place->name }}" style="height:50px; width:80px; object-fit:cover; border-radius:6px;">
                                @else
                                    <span class="text-muted small">Belum ada</span>
                                @endif
                            </td>
                            <td class="fw-semibold">{{ $place->name }}</td>
                            <td>{{ $place->category->name ?? '-' }}</td>
                            <td>{{ $place->location ?? '-' }}</td>
                            <td>Rp {{ number_format($place->ticket_price ?? 0,0,',','.') }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.places.edit', $place) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                <form action="{{ route('admin.places.destroy', $place) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">Belum ada data.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $places->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
