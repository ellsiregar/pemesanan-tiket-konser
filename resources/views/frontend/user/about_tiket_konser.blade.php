@extends('frontend.user.layouts.tiket_main')

@section('title', 'Event Page')

<!-- Header -->
<div class="event-header">
    <h1>{{ $konser->nama_konser }}</h1>
</div>

@section('content')


    <div class="row g-3">

        <!-- Konten Kiri -->
        <div class="col-lg-8">
            <!-- Gambar Utama -->
            <div class="position-relative mb-3">
                <img src="{{ asset('storage/' . $konser->foto) }}" style="width: 100%" alt="Event Image"
                    class="img-fluid rounded">
            </div>

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
                    <li class="nav-item">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                            type="button" role="tab">Review</button>
                    </li>
                </ul>
                <div class="tab-content mt-3" id="eventTabsContent">
                    <!-- Tab: Schedule -->
                    <div class="tab-pane fade show active" id="schedule" role="tabpanel">
                        <p>{{ $konser->deskripsi }}</p>
                    </div>
                    <!-- Tab: Tickets -->
                    <div class="tab-pane fade" id="tickets" role="tabpanel">
                        <div class="container-fluid">
                            <div class="row g-4">
                                @foreach ($tikets as $tiket)
                                    <div class="col-md-4">
                                        <div class="card p-3">
                                            <a href="{{ route('user.transaksi', ['id' => $tiket->KategoriTiket->Konser->id_konser, 'id_tiket' => $tiket->id_tiket]) }}"
                                                class="text-decoration-none" style="color: inherit">
                                                <h5>{{ $tiket->KategoriTiket->nama_kategori }}</h5>
                                                <p>{{ 'Rp ' . number_format($tiket->harga_tiket, 0, ',', '.') }}</p>
                                                <small>Stock:&nbsp;{{ $tiket->quantity }}</small>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <div class="container">
                            <h4>Concert Reviews</h4>
                            @if ($reviews->isEmpty())
                                <p>No reviews available for this concert yet.</p>
                            @else
                                @foreach ($reviews as $review)
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $review->user->name }}</h5>
                                            <p class="card-text">{{ $review->comment }}</p>

                                            <!-- Menampilkan Rating dalam Bentuk Bintang -->
                                            <div class="rating">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <i
                                                        class="fa fa-star {{ $i <= $review->rating ? 'text-warning' : 'text-muted' }}"></i>
                                                @endfor
                                            </div>

                                            <small class="text-muted">Reviewed on
                                                {{ $review->review_date ? \Carbon\Carbon::parse($review->review_date)->format('d M Y') : 'Unknown date' }}
                                            </small>
                                        </div>
                                    </div>
                                @endforeach

                            @endif
                            <hr>
                            @if (now() > $concertDate)
                                <h5>Submit Your Review</h5>
                                <form action="{{ route('user.submitReview') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id_konser" value="{{ $konser->id_konser }}">
                                    <div class="mb-3">
                                        <label for="reviewContent" class="form-label">Your Review</label>
                                        <textarea class="form-control" id="reviewContent" name="comment" rows="3" required></textarea>
                                    </div>

                                    <!-- Rating Bintang -->
                                    <div class="mb-3">
                                        <label for="rating" class="form-label">Rating</label>
                                        <div id="rating" class="stars">
                                            <i class="fa fa-star" data-value="1"></i>
                                            <i class="fa fa-star" data-value="2"></i>
                                            <i class="fa fa-star" data-value="3"></i>
                                            <i class="fa fa-star" data-value="4"></i>
                                            <i class="fa fa-star" data-value="5"></i>
                                        </div>
                                        <input type="hidden" id="ratingValue" name="rating" value="0">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit Review</button>
                                </form>
                            @else
                                <p class="text-muted">You can submit a review after the concert date:
                                    {{ $concertDate->format('d M Y') }}</p>
                            @endif
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

                    <p><strong>Date:</strong>&nbsp;{{ $konser->tanggal_konser ? \Carbon\Carbon::parse($konser->tanggal_konser)->format('d M Y') : 'Unknown date' }}</p>
                    <p><strong>Time:</strong>&nbsp;{{ $konser->waktu_konser }}</p>
                    <p><strong>Venue:</strong>&nbsp;{{ $konser->lokasi }}</p>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('#rating i');
            const ratingValueInput = document.getElementById('ratingValue');

            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const rating = this.getAttribute('data-value');
                    ratingValueInput.value = rating;

                    // Update warna bintang
                    stars.forEach(star => {
                        star.classList.remove('text-warning');
                    });

                    for (let i = 0; i < rating; i++) {
                        stars[i].classList.add('text-warning');
                    }
                });
            });
        });
    </script>

@endsection
