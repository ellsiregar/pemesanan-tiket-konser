<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Image Gallery | Minimage - Tailwind Image Gallery Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="MyraStudio" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets_main/images/favicon.ico') }}">

    <!-- glightbox css -->
    <link rel="stylesheet" href="{{ asset('assets_main/libs/glightbox/css/glightbox.min.css') }}">

    <!-- Fonts Family Link  (Mandatory in All Pages) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Icons css  (Mandatory in All Pages) -->
    <link href="{{ asset('assets_main/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- App css  (Mandatory in All Pages) -->
    <link href="{{ asset('assets_main/css/app.min.css') }}" rel="stylesheet" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Start Page Content here -->
        <div class="page-content">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('user.dashboard') }}">Dashboard</a>
                    <div class="dropdown ms-auto">
                        <button class="btn btn-light dropdown-toggle d-flex align-items-center" type="button"
                            id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-circle me-2"
                                style="width: 40px; height: 40px;">
                            <span class="fw-bold">{{Auth::user()->name}}</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <main>
                @yield('content')
            </main>

            <!-- Footer Start -->
            <footer class="footer bg-default-100 flex items-center py-5">
                <div class="container flex md:justify-between justify-center w-full gap-4">
                    <div>
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Minimage
                    </div>
                    <div class="md:flex hidden gap-2 item-center md:justify-end">
                        Design &amp; Develop by<a href="#" class="text-primary">MyraStudio</a>
                    </div>
                </div>
            </footer>

            <!-- Contact Footer Start -->
            <footer class="footer bg-default-900 py-5">
                <div class="container flex md:justify-between justify-center w-full gap-4">
                    <div>
                        <h4 class="text-white text-lg font-semibold">Contact Us</h4>
                        <p class="text-sm text-gray-400">For inquiries, feel free to reach out to us:</p>
                        <ul class="text-sm text-gray-400">
                            <li>Email: <a href="mailto:contact@minimage.com"
                                    class="text-primary">contact@minimage.com</a></li>
                            <li>Phone: <a href="tel:+123456789" class="text-primary">+1 234 567 89</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
            <!-- Contact Footer End -->

            <!-- Footer End -->

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

</body>

</html>
