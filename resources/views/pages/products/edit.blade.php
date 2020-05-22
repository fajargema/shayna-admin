@extends('layouts.default')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Data Barang</h6>
            <small>{{ $items->name }}</small>
        </div>

        <div class="card-body">
            <form action="{{ route('products.update', $items->id) }}" method="POST">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="name">Nama Barang</label>
                    <input type="text" 
                           name="name" 
                           value="{{ old('name') ? old('name') : $items->name }}"
                           class="form-control @error('name') is-invalid @enderror" />
                    @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="type">Tipe Barang</label>
                    <input type="text" 
                           name="type" 
                           value="{{ old('type') ? old('type') : $items->type }}"
                           class="form-control @error('type') is-invalid @enderror" />
                    @error('type') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi Barang</label>
                    <textarea name="description"
                              class="ckeditor form-control @error('description') is-invalid @enderror">{{ old('description') ? old('description') : $items->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Harga Barang</label>
                    <input type="number" 
                           name="price" 
                           value="{{ old('price') ? old('price') : $items->price }}"
                           class="form-control @error('price') is-invalid @enderror" />
                    @error('price') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="quantity">Kuantitas Barang</label>
                    <input type="number" 
                           name="quantity" 
                           value="{{ old('quantity') ? old('quantity') : $items->quantity }}"
                           class="form-control @error('quantity') is-invalid @enderror" />
                    @error('quantity') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Ubah Barang
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection