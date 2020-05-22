@extends('layouts.default')

@section('content')
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Foto Barang <small>{{ $product->name }}</small></h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nama Barang</th>
                        <th>Foto</th>
                        <th>Default</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->product->name }}</td>
                                <td>
                                    <img src="{{ url($item->photo) }}" width="40px">
                                </td>
                                <td>{{ $item->is_default ? 'Ya' : 'Tidak' }}</td>
                                <td>
                                    <form action="{{ route('product-galleries.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-circle btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center p-5">
                                    Data tidak tersedia
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

    </div>
@endsection