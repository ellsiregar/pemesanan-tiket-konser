@extends('backend.admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="container mt-5">
        <h2 class="mb-4">Statistik Utama</h2>
        <div class="row g-4">
            <!-- Total Konser -->
            <div class="col-md-3">
                <div class="card text-center shadow h-100">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title">Total Konser</h5>
                        <p class="card-text display-6 text-primary">{{$totalKonser}}</p>
                    </div>
                </div>
            </div>

            <!-- Tiket Terjual -->
            <div class="col-md-3">
                <div class="card text-center shadow h-100">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title">Tiket Terjual</h5>
                        <p class="card-text display-6 text-success">{{$TiketTerjual}}</p>
                    </div>
                </div>
            </div>

            <!-- Pendapatan Total -->
            <div class="col-md-3">
                <div class="card text-center shadow h-100">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title">Pendapatan</h5>
                        <p class="card-text display-6 text-warning">Rp {{$pendapatan}}</p>
                    </div>
                </div>
            </div>

            <!-- Jumlah Pengguna -->
            <div class="col-md-3">
                <div class="card text-center shadow h-100">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title">Pengguna Terdaftar</h5>
                        <p class="card-text display-6 text-danger">{{$PenggunaTerdaftar}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
