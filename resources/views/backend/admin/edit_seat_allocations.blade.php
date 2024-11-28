@extends('backend.admin.layouts.app')

@section('title', 'Edit Seat Allocation')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit Pengalokasian Tempat Duduk</h6>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('seat_update', ['id_tiket' => $id_tiket, 'id_lokasi' => $id_lokasi])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nomor_tempat_duduk" class="form-label">Nomor Tempat Duduk</label>
                            <input type="text" class="form-control" id="nomor_tempat_duduk" name="nomor_tempat_duduk" value="{{ old('nomor_tempat_duduk', $SeatAllocation->nomor_tempat_duduk) }}">
                            <div class="text-danger">
                                @error('nomor_tempat_duduk')
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
