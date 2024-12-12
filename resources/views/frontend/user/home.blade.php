<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konser Booking</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/music.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background-image: url('{{ asset('assets_main/images/konser.webp') }}');
            background-size: cover;
            background-position: center;
            color: white;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
            height: 632px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #fff;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            width: 40px;
            height: auto;
            margin-right: 10px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        nav a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #f00;
        }

        .hero h1 {
            font-size: 3rem;
        }

        .card img {
            height: 200px;
            object-fit: cover;
        }

        .content-section {
            padding: 60px;
        }

        .team img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
        }

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
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="50" tabindex="0" id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
        <div class="container-fluid" style="padding: 5px 60px;">
            <div class="logo-container">
                <img src="{{ asset('assets/images/logos/music.png') }}" alt="SoundPass Logo" class="logo">
                <a class="navbar-brand" href="#">SoundPass</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#concerts">Concerts</a>
                    </li>
                    <!-- Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @if(Auth::user())
                            {{ Auth::user()->name }}
                            @endif
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if(Auth::user())
                            <li><a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('user.history') }}">History</a></li>
                            <li><a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a></li>
                            @else
                            <li><a class="dropdown-item" href="{{ route('user.login') }}">Login</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div>
            <h1>Discover Your Favorite Concerts</h1>
            <p>Book your tickets now and enjoy live performances near you!</p>
            <a href="#concerts" class="btn btn-danger btn-lg mt-3">Explore Concerts</a>
        </div>
    </div>

    <!-- About Section -->
    <div class="container-fluid content-section" id="about">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 style="text-align: center">About Us</h2>
                <p style="text-align:center">SoundPass adalah aplikasi inovatif yang memudahkan Anda untuk memesan tiket
                    konser secara cepat dan praktis. Kami hadir untuk memberikan pengalaman terbaik bagi para penggemar
                    musik dalam menjelajahi jadwal konser, memilih tempat duduk favorit, dan menikmati hiburan langsung
                    tanpa repot. Dengan antarmuka yang sederhana dan layanan terpercaya, SoundPass memastikan Anda tidak
                    melewatkan momen spesial bersama artis idola Anda. Bergabunglah dengan kami dan nikmati dunia konser
                    lebih dekat!</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets_main/images/konser.jpg') }}" alt="About Us" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="container-fluid content-section text-center" id="team">
        <h2 class="mb-4">Meet Our Team</h2>
        <div class="row justify-content-center">
            <div class="col-md-3 team">
                <img src="{{ asset('assets_main/images/users/avatar-1.jpg') }}" alt="Team Member 1" class="img-fluid">
                <h5 class="mt-3">Raphy Ahmad S.P</h5>
                <p>Web Development</p>
            </div>
            <div class="col-md-3 team">
                <img src="{{ asset('assets_main/images/users/avatar-5.jpg') }}" alt="Team Member 2" class="img-fluid">
                <h5 class="mt-3">Elisabet Siregar</h5>
                <p>Web Development</p>
            </div>
            <div class="col-md-3 team">
                <img src="{{ asset('assets_main/images/users/avatar-8.jpg') }}" alt="Team Member 3" class="img-fluid">
                <h5 class="mt-3">Dian Anggraini</h5>
                <p>Web Development</p>
            </div>
            <div class="col-md-3 team">
                <img src="{{ asset('assets_main/images/users/avatar-9.jpg') }}" alt="Team Member 4" class="img-fluid">
                <h5 class="mt-3">Reva Salsa Nabila</h5>
                <p>Web Development</p>
            </div>
        </div>
    </div>

    <!-- Concerts Section -->
    <div class="container-fluid content-section" id="concerts">
        <h2 class="text-center mb-4">Upcoming Concerts</h2>
        <div id="concertCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                @foreach ($konsers->chunk(3) as $index => $chunk)
                    <button type="button" data-bs-target="#concertCarousel" data-bs-slide-to="{{ $index }}"
                        class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : '' }}"
                        aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                @foreach ($konsers->chunk(3) as $index => $chunk)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="row g-4">
                            @foreach ($chunk as $konser)
                            <div class="col-3">
                                <a href="{{ route('user.aboutTiket.konser', $konser->id_konser) }}" style="text-decoration: none; color: inherit;">
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
                @endforeach
            </div>

            <!-- Controls -->
            <div class="d-flex justify-content-between mt-3">
                <button class="btn" type="button" data-bs-target="#concertCarousel" data-bs-slide="prev"
                    style="background-color: #6A5ACD; color: white; border: 2px solid #483D8B; border-radius: 8px;">
                    <span class="me-2">&#8592;</span> Previous
                </button>
                <button class="btn" type="button" data-bs-target="#concertCarousel" data-bs-slide="next"
                    style="background-color: #6A5ACD; color: white; border: 2px solid #483D8B; border-radius: 8px;">
                    Next <span class="ms-2">&#8594;</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light py-4">
        <div class="container-fluid text-center">
            <p>&copy; 2024 SoundPass. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('a.nav-link').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>
