@extends('backend.admin.layouts.app')

@section('title', 'tambah SeatAllocations')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Tambah SeatAllocation</h6>
            <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="order_id">Order ID</label>
            <input type="text" name="order_id" id="order_id" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="nomor_tempat_duduk">Nomor Tempat Duduk</label>
            <input type="text" name="nomor_tempat_duduk" id="nomor_tempat_duduk" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
