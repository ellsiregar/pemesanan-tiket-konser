@extends('backend.admin.layouts.app')

@section('title', 'Edit Diskon')

@section('content')

    <div class="col-lg-12">
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Diskon</h5>
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kode_diskon">Kode Diskon</label>
                        <input type="text" id="kode_diskon" name="kode_diskon" class="form-control" value="{{ $diskon->kode_diskon }}" required>
                        <div class="text-danger">
                            @error('kode_diskon')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="id_tiket">ID Tiket</label>
                        <input type="text" id="id_tiket" name="id_tiket" class="form-control" value="{{ $diskon->id_tiket }}" required>
                        <div class="text-danger">
                            @error('id_tiket')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="persentase_diskon">Persentase Diskon (%)</label>
                        <input type="number" id="persentase_diskon" name="persentase_diskon" class="form-control" value="{{ $diskon->persentase_diskon }}" required>
                        <div class="text-danger">
                            @error('peresentase_diskon')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa</label>
                        <input type="date" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" class="form-control" value="{{ $diskon->tanggal_kadaluarsa }}" required>
                        <div class="text-danger">
                            @error('tanggal_kadaluarsa')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                        <a href="" class="btn btn-secondary btn-sm">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
