@extends('backend.admin.layouts.app')

@section('title', 'Konser')

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
                <a href="{{route('konser_create')}}" class="btn btn-primary btn-sm">Tambah</a>
                <div class="table-responsive">
                    <table class="table text-nowrap align-middle mb-0" id="konser">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col">no</th>
                                <th scope="col">nama konser</th>
                                <th scope="col" >artis/band</th>
                                <th scope="col" >lokasi</th>
                                <th scope="col" >tanggal konser</th>
                                <th scope="col" >waktu konser</th>
                                <th scope="col" >deskripsi</th>
                                <th scope="col">Foto</th>
                                <th scope="col" class="text-center">actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($konsers as $konser )
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$konser->nama_konser}}</td>
                                <td>{{$konser->nama_artis_band}}</td>
                                <td>{{$konser->lokasi}}</td>
                                <td>{{$konser->tanggal_konser}}</td>
                                <td>{{$konser->waktu_konser}}</td>
                                <td>{{$konser->deskripsi}}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $konser->foto) }}" alt="" height="30">
                                </td>
                                <td class="text-center">
                                    <a href="{{route('konser_edit', $konser->id_konser)}}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{route('konser_delete', $konser->id_konser)}}" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function() {
        $('#konser').DataTable();
    });
</script>

@endsection
