@extends('backend.admin.layouts.app')

@section('title', 'Edit Diskon')

@section('content')


<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit Diskon</h6>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('diskon_update', $Diskon->id_diskon) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="id_tiket" class="form-label">KONSER</label>
                            <select name="id_tiket" id="id_tiket" class="form-select">
                                <option value="">-pilih-</option>
                                @foreach ($tikets as $tiket)
                                    <option value="{{ $tiket->id_tiket }}"
                                        {{ old('id_tiket', $Diskon->id_tiket) == $tiket->id_tiket ? 'selected' : '' }}>
                                        {{ $tiket->KategoriTiket->nama_kategori }} - {{ $tiket->KategoriTiket->konser->nama_konser }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="text-danger">
                                @error('id_tiket')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="persentase_diskon" class="form-label">Persentase Diskon (%)</label>
                            <input type="text" class="form-control" id="persentase_diskon" name="persentase_diskon" required
                                value="{{ old('persentase_diskon', $Diskon->persentase_diskon) }}">
                            <div class="text-danger">
                                @error('persentase_diskon')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_kadaluarsa" class="form-label">Tanggal Kadaluarsa</label>
                            <input type="date" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" required
                                value="{{ old('tanggal_kadaluarsa', $Diskon->tanggal_kadaluarsa) }}">
                            <div class="text-danger">
                                @error('tanggal_kadaluarsa')
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
