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
                                <div class="col-md-4">
                                    <div class="card shadow">
                                        <img src="{{ asset('storage/' . $konser->foto) }}" class="card-img-top"
                                            alt="Concert {{ $konser->id_konser }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $konser->nama_konser }}</h5>
                                            <p class="card-text">{{ Str::limit($konser->deskripsi, 100, '...') }}</p>
                                            <p><small class="text-muted">{{ $konser->lokasi }}</small></p>
                                            <a href="#" class="btn btn-sm" style="background-color: #FFC0CB; color: rgb(25, 23, 23); border: none; border-radius: 8px;">Get Tickets</a>

                                        </div>
                                    </div>
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
