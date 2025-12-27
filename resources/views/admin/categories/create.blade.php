@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Tambah Kategori</h4>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="{{ route('admin.categories.store') }}" method="POST" class="row g-3">
            @csrf
            <div class="col-12">
                <label class="form-label">Nama Kategori</label>
                <input type="text" name="name" class="form-control" placeholder="Contoh: Pantai" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
