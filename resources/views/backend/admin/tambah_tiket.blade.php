@extends('backend.admin.layouts.app')

@section('title', 'Tambah Tiket')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Tambah Tiket</h6>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="order_id" class="form-label">Order ID</label>
                    <input type="text" class="form-control" id="order_id" name="order_id" value="{{ old('order_id') }}">
                    <div class="text-danger">
                        @error('order_id')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="users_id" class="form-label">User</label>
                    <select name="users_id" id="users_id" class="form-select">
                        <option value="">-pilih-</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
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
                            <option value="{{ $kategoriTiket->id }}">{{ $kategoriTiket->nama_kategori }}</option>
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
                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}">
                    <div class="text-danger">
                        @error('quantity')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select">
                        <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="confirmed" {{ old('status') == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                        <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
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
