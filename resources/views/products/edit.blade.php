@extends('layouts.admin')

@section('title', 'Edit Vehicle')

@section('tabel')
    <h1 class="mb-0">Edit vehicle</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Karyawan</label>
                <input type="text" name="title" class="form-control" placeholder="Nama Karyawan" value="{{ $product->title }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Nomor Hp</label>
                <input type="text" name="price" class="form-control" placeholder="Nomor Hp" value="{{ $product->price }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="product_code" class="form-control" placeholder="Email"
                    value="{{ $product->product_code }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Posisi</label>
                <textarea class="form-control" name="description" placeholder="Posisi">{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
