@extends('backend.admin.layouts.app')

@section('title', 'Tiket Kategori')

@section('content')

    <div class="col-lg-12">
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Website Pemesanan Tiket</h5>
                <a href="{{route('tiket_create')}}" class="btn btn-primary btn-sm">Tambah</a>
                <div class="table-responsive">
                    <table class="table text-nowrap align-middle mb-0">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col">konser</th>
                                <th scope="col">kategori</th>
                                <th scope="col" >harga</th>
                                <th scope="col" class="text-center">jumlah</th>
                                <th scope="col" class="text-center">actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($KategoriTikets as $KategoriTiket )
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$KategoriTiket->Konser->nama_konser}}</td>
                                <td>{{$KategoriTiket->nama_kategori}}</td>
                                <td>{{$KategoriTiket->harga_tiket}}</td>
                                <td>{{$KategoriTiket->jumlah_tiket}}</td>
                                <td>
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
