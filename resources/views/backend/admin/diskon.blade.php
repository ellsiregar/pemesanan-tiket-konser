@extends('backend.admin.layouts.app')

@section('title', 'Diskon')

@section('content')

    <div class="col-lg-12">
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Website Pemesanan Tiket - Diskon</h5>
                <a href="{{route('diskon_create')}}" class="btn btn-primary btn-sm">Tambah</a>
                <div class="table-responsive">
                    <table class="table text-nowrap align-middle mb-0">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col">No</th>
                                <th scope="col">Kode Diskon</th>
                                <th scope="col">Persentase Diskon</th>
                                <th scope="col">Tanggal Kadaluarsa</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($diskons as $diskon)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $diskon->diskon_kode }}</td>
                                <td>{{ $diskon->persentase_diskon }}</td>
                                <td>{{ $diskon->tanggal_kadaluarsa }}</td>
                                <td class="text-center">
                                    <a href="{{route('diskon_edit', $diskon->id_diskon)}}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{route('diskon_delete', $diskon->id_diskon)}}" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Delete</a>
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
