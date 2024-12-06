<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        /* Header */
        .event-header {
            background: linear-gradient(90deg, #003366, #1a1a1a);
            color: #fff;
            padding: 30px 15px;
            text-align: center;
        }

        /* Background untuk main content */
        .main-content {
            background: #f8f9fa;
            padding: 30px;
        }

        /* Kartu konten */
        .content-card {
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        /* Tombol */
        .register-btn {
            background-color: #e91e63;
            color: #fff;
        }

        .register-btn:hover {
            background-color: #c2185b;
        }

        /* Footer */
        footer {
            background: linear-gradient(90deg, #003366, #1a1a1a);
            color: white;
            padding: 40px 0;
        }

        footer h5 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        footer a {
            color: #e91e63;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .footer-link li {
            list-style: none;
            margin-bottom: 10px;
        }

        .footer-link li a {
            color: #e91e63;
            font-size: 14px;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .event-header h1 {
                font-size: 24px;
            }

            footer .row {
                text-align: center;
            }

            .card.p-3:hover {
                transform: scale(1.05);
                /* Efek memperbesar sedikit */
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
                /* Bayangan lebih jelas */
                transition: all 0.3s ease;
                /* Transisi halus */
                cursor: pointer;
                /* Ubah kursor menjadi pointer */
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="event-header">
        <h1>nama konser</h1>
    </div>

    <!-- Main Content -->
    <div class="container main-content">
        @yield('content')
    </div>

    <!-- Sidebar -->

    <!-- Footer -->
    <footer class="text-center text-lg-start">
        <div class="container">
            <div class="row">
                <!-- Kontak -->
                <div class="col-lg-4 mb-4">
                    <h5>Contact</h5>
                    <p>Email: <a href="mailto:info@event.com">info@event.com</a></p>
                    <p>Phone: +123-456-7890</p>
                    <p>Address: 123 Event Street, New York, USA</p>
                </div>

                <!-- Tautan Cepat -->
                <div class="col-lg-4 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="footer-link">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>

                <!-- Sosial Media -->
                <div class="col-lg-4 mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="me-3"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="me-3"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="me-3"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
