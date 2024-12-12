<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="MyraStudio" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/music.png') }}" />

    <!-- glightbox css -->
    <link rel="stylesheet" href="{{ asset('assets_main/libs/glightbox/css/glightbox.min.css') }}">

    <!-- Fonts Family Link  (Mandatory in All Pages) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Icons css  (Mandatory in All Pages) -->
    <link href="{{ asset('assets_main/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- App css  (Mandatory in All Pages) -->
    <link href="{{ asset('assets_main/css/app.min.css') }}" rel="stylesheet" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
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
    <div class="wrapper">
        <!-- Start Page Content here -->
        <div class="page-content">
            <main>
                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="text-center text-lg-start">
                <div class="container-fluid text-center">
                    <p>&copy; 2024 SoundPass. All rights reserved.</p>
                </div>
            </footer>
        </div>
        <!-- End Page content -->
    </div>

    <!-- Plugin Js (Mandatory in All Pages) -->
    <script src="{{ asset('assets_main/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_main/libs/preline/preline.js') }}"></script>
    <script src="{{ asset('assets_main/libs/simplebar/simplebar.min.js') }}"></script>

    <!-- App Js (Mandatory in All Pages) -->
    <script src="{{ asset('assets_main/js/app.js') }}"></script>

    <!-- Shuffle JS -->
    <script src="{{ asset('assets_main/libs/shufflejs/shuffle.min.js') }}"></script>

    <!-- glightbox js -->
    <script src="{{ asset('asset_main/libs/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Filtter Demo js -->
    <script src="{{ asset('assets_main/js/pages/gallery.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="scripts.js"></script>

    @yield('scripts')

</body>

</html>
