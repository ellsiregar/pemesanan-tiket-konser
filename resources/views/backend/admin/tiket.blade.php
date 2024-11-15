@extends('backend.admin.layouts.app')

@section('title', 'Tiket')

@section('content')

<div class="col-lg-12">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Website Pemesanan Tiket</h5>
            <a href="{{ route('tiket_create') }}" class="btn btn-primary btn-sm">Tambah</a>
            <div class="table-responsive">
                <table class="table text-nowrap align-middle mb-0">
                    <thead>
                        <tr class="border-2 border-bottom border-primary border-0">
                            <th scope="col">NO</th>
                            <th scope="col">Kategori Tiket</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Harga</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($tikets as $tiket)
                        <tr>
                            <th scope="row">{{  $loop->iteration }}</th>
                            <td>{{ $tiket->KategoriTiket->nama_kategori }}</td>
                            <td>{{ $tiket->quantity }}</td>
                            <td>{{ $tiket->harga_tiket }}</td>
                            <td class="text-center">
                                <a href="{{route('tiket_edit', $tiket->id_tiket)}}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{route('tiket_delete', $tiket->id_tiket)}}" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
