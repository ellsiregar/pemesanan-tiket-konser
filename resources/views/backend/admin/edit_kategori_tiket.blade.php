@extends('backend.admin.layouts.app')

@section('title', 'Edit kategori tiket')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">edit Kategori Tiket</h6>
            <form action="{{ route('tiket_update', $KategoriTiket->id_kategori_tiket) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="id_konser" class="form-label">KONSER</label>
                    <select name="id_konser" id="id_konser" class="form-select">
                        <option value="">-pilih-</option>
                        @foreach ($konsers as $konser)
                            <option value="{{ $konser->id_konser }}">{{ $konser->nama_konser }}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">
                        @error('id_konser')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nama_kategori" class="form-label">KATEGORI</label>
                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori', $KategoriTiket->nama_kategori) }}">
                    <div class="text-danger">
                        @error('nama_kategori')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="harga_tiket" class="form-label">HARGA</label>
                    <input type="number" class="form-control" id="harga_tiket" name="harga_tiket" value="{{ old('harga_tiket', $KategoriTiket->harga_tiket) }}">
                    <div class="text-danger">
                        @error('harga_tiket')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="jumlah_tiket" class="form-label">JUMLAH</label>
                    <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket" value="{{ old('jumlah_tiket', $KategoriTiket->jumlah_tiket) }}">
                    <div class="text-danger">
                        @error('jumlah_tiket')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection
