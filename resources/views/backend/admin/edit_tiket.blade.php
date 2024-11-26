@extends('backend.admin.layouts.app')

@section('title', 'Edit Tiket')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit Tiket</h6>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('tiket_update', $Tiket->id_tiket)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id_kategori_tiket" class="form-label">Kategori Tiket</label>
                            <select name="id_kategori_tiket" id="id_kategori_tiket" class="form-select">
                                <option value="">-pilih-</option>
                                @foreach ($KategoriTikets as $KategoriTiket)
                                    <option value="{{ $KategoriTiket->id_kategori_tiket }}">{{ $KategoriTiket->nama_kategori }}</option>
                                @endforeach
                            </select>
                            <div class="text-danger">
                                @error('id_kategori_tiket')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $Tiket->quantity) }}">
                            <div class="text-danger">
                                @error('quantity')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="harga_tiket" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga_tiket" name="harga_tiket" value="{{ old('harga_tiket', $Tiket->harga_tiket) }}">
                            <div class="text-danger">
                                @error('harga_tiket')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
