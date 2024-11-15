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
                <div class="table-responsive">
                    <table class="table text-nowrap align-middle mb-0">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col">ID Alokasi</th>
                                <th scope="col">Order ID</th>
                                <th scope="col">Nomor Tempat Duduk</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($SeatAllocations as $SeatAllocation)
                            <tr>
                                <td>{{ $SeatAllocation->id }}</td>
                                <td>{{ $SeatAllocation->order_id }}</td>
                                <td>{{ $SeatAllocation->nomor_tempat_duduk }}</td>
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
