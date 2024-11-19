@extends('backend.admin.layouts.app')

@section('title', 'tambah diskon')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Tambah Diskon</h6>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="id_tiket" class="form-label">ID Tiket</label>
                    <input type="number" class="form-control" id="id_tiket" name="id_tiket" required>
                </div>
                <div class="mb-3">
                    <label for="diskon_kode" class="form-label">Kode Diskon</label>
                    <input type="text" class="form-control" id="diskon_kode" name="diskon_kode" required>
                </div>
                <div class="mb-3">
                    <label for="presentase_diskon" class="form-label">Presentase Diskon (%)</label>
                    <input type="number" class="form-control" id="presentase_diskon" name="presentase_diskon" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal_kadaluarsa" class="form-label">Tanggal Kadaluarsa</label>
                    <input type="date" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Diskon</button>
            </form>
        </div>
    </div>

@endsection
