@extends('backend.admin.layouts.app')

@section('title', 'Seat Allocations')

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
                <a href="{{ route('seat_create', $id_tiket) }}" class="btn btn-primary btn-sm">Tambah</a>
                <div class="table-responsive">
                    <table class="table text-nowrap align-middle mb-0">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col">No</th>
                                <th scope="col">tiket</th>
                                <th scope="col">Nomor Tempat Duduk</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($SeatAllocations as $SeatAllocation)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $SeatAllocation->tiket->kategoriTiket->nama_kategori ?? 'Tidak ada kategori' }}-{{ $SeatAllocation->tiket->KategoriTiket->konser->nama_konser}}</td>
                                <td>{{ $SeatAllocation->nomor_tempat_duduk }}</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{ route('seat_delete', ['id_tiket' => $id_tiket, 'id_lokasi' => $SeatAllocation->id_lokasi]) }}" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Delete</a>
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
