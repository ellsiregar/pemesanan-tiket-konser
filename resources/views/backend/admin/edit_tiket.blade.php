@extends('backend.admin.layouts.app')

@section('title', 'Edit Tiket')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit Tiket</h6>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="users_id" class="form-label">User</label>
                    <select name="users_id" id="users_id" class="form-select">
                        <option value="">-pilih-</option>
                        @foreach ($users as $user)
                            <option value="{{ $users->users_id }}">{{ $users->users_id }}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">
                        @error('users_id')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="id_kategori_tiket" class="form-label">Kategori Tiket</label>
                    <select name="id_kategori_tiket" id="id_kategori_tiket" class="form-select">
                        <option value="">-pilih-</option>
                        @foreach ($kategoriTikets as $kategoriTiket)
                            <option value="{{ $kategori_tiket->id_kategori_tiket }}">{{ $kategori_tiket->id_kategori_tiket }}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">
                        @error('id_kategori_tiket')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="jumlah_tiket" class="form-label">Jumlah Tiket</label>
                    <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket" value="{{ old('jumlah_tiket', $KategoriTiket->jumlah_tiket) }}">
                    <div class="text-danger">
                        @error('jumlah_tiket')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status Tiket</label>
                    <select name="status" id="status" class="form-select">
                        <option value="booked" {{ old('status', $Tiket->status) == 'booked' ? 'selected' : '' }}>Booked</option>
                        <option value="paid" {{ old('status', $Tiket->status) == 'paid' ? 'selected' : '' }}>Paid</option>
                        <option value="cancelled" {{ old('status', $Tiket->status) == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                    <div class="text-danger">
                        @error('status')
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
