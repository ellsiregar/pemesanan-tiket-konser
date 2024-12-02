@extends('frontend.user.layouts.tiket_main')

@section('title', 'Event Page')
@section('header_title', 'Nama Konser')

@section('content')
    <div class="row g-3">
        <!-- Konten Kiri -->
        <div class="col-lg-8">
            <!-- Gambar Utama -->
            <div class="position-relative mb-3">
                <img src="{{ asset('assets_main/images/download.jpg') }}" alt="Event Image" class="img-fluid rounded">
            </div>

            <!-- Deskripsi -->
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem corrupti cum ipsa harum
                natus, rerum omnis commodi, in nisi voluptatum, iusto deleniti? Nisi laudantium ipsum quibusdam
                facere, tenetur libero soluta.
            </p>

            <!-- Kartu Konten -->
            <div class="content-card">
                <!-- Tabs -->
                <ul class="nav nav-tabs" id="eventTabs" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" id="schedule-tab" data-bs-toggle="tab"
                            data-bs-target="#schedule" type="button" role="tab">Schedule</button>
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
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="card p-3">
                                    <a href="{{ route('user.transaksi') }}">
                                        <h5>Ticket 1</h5>
                                        <p>$10</p>
                                        <small>954 Tickets Left</small>
                                    </a>
                                </div>
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
                    @foreach ($konsers as $konser)
                        <p><strong>Date:</strong>{{ $konser->tanggal_konser }}</p>
                        <p><strong>Time:</strong>{{ $konser->waktu_konser }}</p>
                        <p><strong>Venue:</strong>{{ $konser->lokasi }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
