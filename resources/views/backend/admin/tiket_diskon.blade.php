@extends('backend.admin.layouts.app')

@section('title', ' Tiket Diskon')

@section('content')

    <div class="col-lg-12">
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Website Pemesanan Tiket - Tiket Diskon</h5>
                <div class="table-responsive">
                    <table class="table text-nowrap align-middle mb-0">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col">No</th>
                                <th scope="col">tiket</th>
                                <th scope="col">diskon</th>
                                <th scope="col">waktu digunakan</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($tiketDiskons as $tiketDiskon)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $tiketDiskon->tiket->KategoriTiket->nama_kategori}}</td>
                                <td>{{ $tiketDiskon->diskon->diskon_kode}}</td>
                                <td>{{ $tiketDiskon->appliad_date }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection