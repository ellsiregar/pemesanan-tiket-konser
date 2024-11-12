@extends('backend.admin.layouts.app')

@section('title', 'Tambah konser')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit Konser</h6>
            <form action="{{ route('konser_update', $konser->id_konser) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_konser" class="form-label">nama_konser</label>
                    <input type="text" class="form-control" id="nama_konser" name="nama_konser" value="{{ old('nama_konser', $konser->nama_konser) }}">
                    <div class="text-danger">
                        @error('nama_konser')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nama_artis_band" class="form-label">nama_artis_band</label>
                    <input type="nama_artis_band" class="form-control" id="nama_artis_band" name="nama_artis_band" value="{{ old('nama_artis_band', $konser->nama_artis_band) }}">
                    <div class="text-danger">
                    @error('nama_artis_band')
                    {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label">lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi">
                    <div class="text-danger">
                    @error('lokasi')
                    {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tanggal_konser" class="form-label">Tanggal Konser</label>
                    <input type="date" class="form-control" id="tanggal_konser" name="tanggal_konser" value="{{ old('tanggal_konser', $konser->tanggal_konser) }}">
                    <div class="text-danger">
                    @error('tanggal_konser')
                    {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="waktu_konser" class="form-label">Waktu Konser</label>
                    <input type="time" class="form-control" id="waktu_konser" name="waktu_konser" value="{{ old('waktu_konser', $konser->waktu_konser) }}">
                    <div class="text-danger">
                    @error('waktu_konser')
                    {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="time" class="form-control" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $konser->deskripsi) }}">
                    <div class="text-danger">
                    @error('deskripsi')
                    {{ $message }}
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

</div>

@endsection
