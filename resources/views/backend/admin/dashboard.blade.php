@extends('backend.admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Website Pemesanan Tiket</h5>
                <a href="{{route('konser_create')}}" class="btn btn-primary btn-sm">Tambah</a>
                <div class="table-responsive">
                    <table class="table text-nowrap align-middle mb-0">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col">nama konser</th>
                                <th scope="col" >artis/band</th>
                                <th scope="col" class="text-center">lokasi</th>
                                <th scope="col" class="text-center">tanggal konser</th>
                                <th scope="col" class="text-center">waktu konser</th>
                                <th scope="col" class="text-center">deskripsi</th>
                                <th scope="col" class="text-center">actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row" class="ps-0 fw-medium">
                                    <span class="table-link1 text-truncate d-block">ndx</span>
                                </th>
                                <td>
                                    <a href="javascript:void(0)"
                                        class="link-primary text-dark fw-medium d-block">NDX</a>
                                </td>
                                <td class="text-center fw-medium">metro</td>
                                <td class="text-center fw-medium">06-11-2077</td>
                                <td class="text-center fw-medium">
                                    <button class="btn btn-warning btn-sm">edit</button>
                                    <button class="btn btn-danger btn-sm">hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
