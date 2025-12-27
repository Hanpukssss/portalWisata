@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Edit Kategori</h4>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="{{ route('admin.categories.update', $category) }}" method="POST" class="row g-3">
            @csrf
            @method('PUT')
            <div class="col-12">
                <label class="form-label">Nama Kategori</label>
                <input type="text" name="name" value="{{ old('name',$category->name) }}" class="form-control" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary">Perbarui</button>
            </div>
        </form>
    </div>
</div>
@endsection
