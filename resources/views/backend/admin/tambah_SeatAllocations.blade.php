@extends('backend.admin.layouts.app')

@section('title', 'tambah SeatAllocations')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Tambah SeatAllocations</h6>
            <form action="{{ route('seat_store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="id_tiket" class="form-label">TIKET</label>
                    <select name="id_tiket" id="id_tiket" class="form-select">
                        <option value="">-pilih-</option>
                        @foreach ($SeatAllocations as $SeatAllocation)
                            <option value="{{ $SeatAllocation-> }}">{{ $SeatAllocation->tiket->kategoriTiket->nama_kategori  }}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">
                        @error('id_konser')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nomor_tempat_duduk" class="form-label"> TEMPAT DUDUK</label>
                    <input type="text" class="form-control" id="nomor_tempat_duduk" name="nomor_tempat_duduk">
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

@endsection
