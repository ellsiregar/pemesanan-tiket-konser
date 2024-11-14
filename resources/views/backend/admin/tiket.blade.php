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
                            <th scope="col">Order ID</th>
                            <th scope="col">User</th>
                            <th scope="col">Kategori Tiket</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($tickets as $ticket)
                        <tr>
                            <th scope="row">{{ $ticket->order_id }}</th>
                            <td>{{ $ticket->user->name }}</td>
                            <td>{{ $ticket->kategoriTiket->nama_kategori }}</td>
                            <td>{{ $ticket->quantity }}</td>
                            <td>{{ $ticket->status }}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                                <a href="" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Delete</a>
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
