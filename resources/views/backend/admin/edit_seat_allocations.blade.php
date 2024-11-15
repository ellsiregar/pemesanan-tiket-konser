@extends('backend.admin.layouts.app')

@section('title', 'Edit Seat Allocation')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit Pengalokasian Tempat Duduk</h6>
            <form action="" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="order_id" class="form-label">Order ID</label>
                    <input type="text" class="form-control" id="order_id" name="order_id" value="{{ old('order_id', $SeatAllocation->order_id) }}">
                    <div class="text-danger">
                        @error('order_id')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

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

@endsection
