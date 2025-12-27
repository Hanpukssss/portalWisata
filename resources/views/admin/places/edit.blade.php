@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Edit Tempat Wisata</h4>
    <a href="{{ route('admin.places.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="{{ route('admin.places.update', $place) }}" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <label class="form-label">Nama</label>
                <input type="text" name="name" value="{{ old('name',$place->name) }}" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Kategori</label>
                <select name="category_id" class="form-select" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @selected($category->id==$place->category_id)>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" rows="3" class="form-control">{{ old('description',$place->description) }}</textarea>
            </div>
            <div class="col-md-6">
                <label class="form-label">Lokasi</label>
                <input type="text" name="location" value="{{ old('location',$place->location) }}" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Harga Tiket</label>
                <input type="number" name="ticket_price" value="{{ old('ticket_price',$place->ticket_price) }}" class="form-control" min="0" step="1000">
            </div>
            <div class="col-md-6">
                <label class="form-label">Jam Buka</label>
                <input type="time" name="open_time" value="{{ old('open_time',$place->open_time) }}" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Jam Tutup</label>
                <input type="time" name="close_time" value="{{ old('close_time',$place->close_time) }}" class="form-control">
            </div>
            <div class="col-12">
                <label class="form-label">Gambar (opsional)</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @if($place->image)
                    <div class="mt-2">
                        <span class="text-muted small d-block mb-1">Gambar saat ini:</span>
                        <img src="{{ asset('storage/'.$place->image) }}" alt="Gambar" class="img-thumbnail" style="max-height:140px;">
                    </div>
                @endif
                <div class="form-text">File baru menggantikan gambar lama. Disimpan ke storage/public/images.</div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary">Perbarui</button>
            </div>
        </form>
    </div>
</div>
@endsection
