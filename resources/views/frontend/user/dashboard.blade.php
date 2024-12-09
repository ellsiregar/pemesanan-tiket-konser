@extends('frontend.user.layouts.app')

@section('tittle', 'Dashboard')

@section('content')
    <style>
        .image-wrapper {
            position: relative;
            /* Membuat elemen anak bisa diatur secara absolut */
        }

        .circle {
            position: absolute;
            bottom: -35px;
            /* Posisi lingkaran sebagian keluar dari gambar */
            left: 20px;
            /* Jarak dari sisi kiri */
            width: 80px;
            /* Ukuran lingkaran */
            height: 80px;
            background-color: #f04545;
            /* Warna lingkaran */
            border-radius: 50%;
            /* Membuat elemen menjadi lingkaran */
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Opsional: Bayangan */
            z-index: 1;
            /* Agar lingkaran berada di atas gambar */
            color: white;
            /* Warna teks di dalam lingkaran */
            font-weight: bold;
            text-align: center;
            font-size: 12px;
        }

        .date-text {
            line-height: 1.2;
            /* Sesuaikan tinggi teks */
            font-size: 12px;
            /* Ukuran font */
            text-transform: uppercase;
            /* Opsional: Huruf besar semua */
        }
    </style>
    <div class="container-fluid">
        <div class="row g-4">
            @foreach ($konsers as $konser)
                <div class="col-3">
                    <a href="{{ route('user.aboutTiket.konser', $konser->id_konser) }}" style="text-decoration: none;">
                        <div class="card shadow">
                            <div class="image-wrapper">
                                <img src="{{ asset('storage/' . $konser->foto) }}" class="card-img-top" alt="..." style="height:200px; object-fit:cover;" >
                                <div class="circle">
                                    <span class="date-text">
                                        {{ strtoupper(\Carbon\Carbon::parse($konser->tanggal_konser)->format('M')) }}<br>
                                        {{ \Carbon\Carbon::parse($konser->tanggal_konser)->format('d-Y') }}
                                    </span>
                                </div>
                            </div>
                            <br>
                            <div class="card-body">
                                <h5 class="card-title">{{ $konser->nama_konser }}</h5>
                                <p class="card-text">{{ Str::limit($konser->deskripsi, 100, '...') }}</p>
                                <p class="d-flex align-items-center" style="gap: 5px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path
                                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg>
                                    <small>{{ $konser->lokasi }}</small>
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <small style="font-size: 16px; font-weight: 600;">Get Ticket</small>
                                    <small style="font-size: 16px; font-weight: 600;" class="text-danger">
                                        @if ($tiketTermurah && $tiketTermahal)
                                            Rp{{ number_format($tiketTermurah->harga_tiket, 0, ',', '.') }} -
                                            Rp{{ number_format($tiketTermahal->harga_tiket, 0, ',', '.') }}
                                        @else
                                            Harga tiket belum tersedia
                                        @endif
                                    </small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
