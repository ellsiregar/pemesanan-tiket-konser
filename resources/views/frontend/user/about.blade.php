<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background-image: url('{{ asset('assets/about-hero.jpg') }}');
            background-size: cover;
            background-position: center;
            color: white;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
        }

        .content-section {
            padding: 40px 0;
        }

        .content-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .team img {
            border-radius: 50%;
            height: 150px;
            width: 150px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">SoundPass</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div>
            <h1>About Us</h1>
            <p>Learn more about our mission and team</p>
        </div>
    </div>

    <!-- About Section -->
    <div class="container content-section">
        <div class="row">
            <div class="col-md-6">
                <h2>Our Mission</h2>
                <p>
                    Aplikasi Pemesanam Tiket Konser
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets_main/images/konser.jpg') }}" alt="Our Mission" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="container content-section text-center">
        <h2>Meet Our Team</h2>
        <div class="row justify-content-center">
            <div class="col-md-3 team">
                <img src="{{ asset('assets/team1.jpg') }}" alt="Team Member 1" class="img-fluid">
                <h5 class="mt-2">Raphy Ahmad s.p</h5>
                <p>web development</p>
            </div>
            <div class="col-md-3 team">
                <img src="{{ asset('assets/team2.jpg') }}" alt="Team Member 2" class="img-fluid">
                <h5 class="mt-2">Elisabet Siregar</h5>
                <p>web development</p>
            </div>
            <div class="col-md-3 team">
                <img src="{{ asset('assets/team3.jpg') }}" alt="Team Member 3" class="img-fluid">
                <h5 class="mt-2">Dian Anggraini</h5>
                <p>web development</p>
            </div>
            <div class="col-md-3 team">
                <img src="{{ asset('assets/team3.jpg') }}" alt="Team Member 3" class="img-fluid">
                <h5 class="mt-2">Reva Salsa Nabila</h5>
                <p>web development</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light py-4">
        <div class="container text-center">
            <p>&copy; 2024 KonserBooking. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
