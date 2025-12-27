@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Tambah Tempat Wisata</h4>
    <a href="{{ route('admin.places.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="{{ route('admin.places.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Kategori</label>
                <select name="category_id" class="form-select" required>
                    <option value="">-- pilih --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" rows="3" class="form-control" placeholder="Ceritakan singkat tempat wisata"></textarea>
            </div>
            <div class="col-md-6">
                <label class="form-label">Lokasi</label>
                <input type="text" name="location" class="form-control" placeholder="Kota/Kabupaten">
            </div>
            <div class="col-md-6">
                <label class="form-label">Harga Tiket</label>
                <input type="number" name="ticket_price" class="form-control" min="0" step="1000" placeholder="15000">
            </div>
            <div class="col-md-6">
                <label class="form-label">Jam Buka</label>
                <input type="time" name="open_time" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Jam Tutup</label>
                <input type="time" name="close_time" class="form-control">
            </div>
            <div class="col-12">
                <label class="form-label">Gambar (opsional)</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                <div class="form-text">File akan disimpan ke storage/public/images (butuh storage:link).</div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
