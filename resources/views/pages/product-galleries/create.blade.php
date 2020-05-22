@extends('layouts.default')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Foto Barang</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('product-galleries.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Barang</label>
                    <select name="products_id" 
                            required
                            class="form-control @error('products_id') is-invalid @enderror">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                    @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="photo" class="form-control-label">Foto Barang</label>
                    <input type="file" 
                           name="photo" 
                           value="{{ old('photo') }}"
                           accept="image/*"
                           required
                           class="form-control @error('photo') is-invalid @enderror" />
                    @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="is_default" class="form-control-label">Jadikan Default</label>
                    <br>
                    <label>
                        <input type="radio" 
                           name="is_default" 
                           value="1" 
                           required
                           class="@error('is_default') is-invalid @enderror"> Ya
                    </label>
                    &nbsp;
                    <label>
                        <input type="radio" 
                           name="is_default" 
                           value="0"
                           required
                           class="@error('is_default') is-invalid @enderror"> Tidak
                    </label>
                    @error('is_default') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Tambah Foto Barang
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection