@extends('frontend.user.layouts.tiket_main')

@section('title', 'Event Page')

@section('content')


    <div class="row g-3">

        <!-- Konten Kiri -->
        <div class="col-lg-8">
            <!-- Gambar Utama -->
            <div class="position-relative mb-3">
                <img src="{{ asset('storage/' . $konser->foto) }}" style="height: 350px" alt="Event Image"
                    class="img-fluid rounded">
            </div>

            <!-- Deskripsi -->
            <p class="mb-3">
                {{ $konser->deskripsi }}
            </p>

            <!-- Kartu Konten -->
            <div class="content-card">
                <!-- Tabs -->
                <ul class="nav nav-tabs" id="eventTabs" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" id="schedule-tab" data-bs-toggle="tab" data-bs-target="#schedule"
                            type="button" role="tab">Schedule</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="tickets-tab" data-bs-toggle="tab" data-bs-target="#tickets"
                            type="button" role="tab">Tickets & Price</button>
                    </li>
                </ul>
                <div class="tab-content mt-3" id="eventTabsContent">
                    <!-- Tab: Schedule -->
                    <div class="tab-pane fade show active" id="schedule" role="tabpanel">
                        <p>Event Schedule Details</p>
                    </div>
                    <!-- Tab: Tickets -->
                    <div class="tab-pane fade" id="tickets" role="tabpanel">
                        <div class="container-fluid">
                            <div class="row g-4">
                                @foreach ($tikets as $tiket)
                                    <div class="col-md-4">
                                        <div class="card p-3">
                                            <a
                                                href="{{ route('user.transaksi', ['id' => $tiket->KategoriTiket->Konser->id_konser, 'id_tiket' => $tiket->id_tiket]) }}"  class="text-decoration-none">
                                                <h5>{{$tiket->KategoriTiket->nama_kategori}}</h5>
                                                <p>{{ 'Rp' . number_format($tiket->harga_tiket, 0, ',', '.') }}</p>
                                                <small>{{ $tiket->quantity }}</small>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5><i class="bi bi-calendar-event"></i> Event Details</h5>

                    <p><strong>Date:</strong>{{ $konser->tanggal_konser }}</p>
                    <p><strong>Time:</strong>{{ $konser->waktu_konser }}</p>
                    <p><strong>Venue:</strong>{{ $konser->lokasi }}</p>

                </div>
            </div>
        </div>

    </div>
@endsection
