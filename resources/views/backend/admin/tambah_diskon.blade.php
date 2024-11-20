@extends('backend.admin.layouts.app')

@section('title', 'tambah diskon')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Tambah Diskon</h6>
            <form action="{{route('diskon_store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="persentase_diskon" class="form-label">Presentase Diskon (%)</label>
                    <input type="text" class="form-control" id="persentase_diskon" name="persentase_diskon" required>
                    <div class="text-danger">
                        @error('id_tiket')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tanggal_kadaluarsa" class="form-label">Tanggal Kadaluarsa</label>
                    <input type="date" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" required>
                    <div class="text-danger">
                        @error('id_tiket')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Diskon</button>
            </form>
        </div>
    </div>

@endsection
