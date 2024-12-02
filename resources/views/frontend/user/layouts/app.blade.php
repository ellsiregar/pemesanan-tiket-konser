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
                    <a class="navbar-brand" href="#">Dashboard</a>
                    <div class="dropdown ms-auto">
                        <button class="btn btn-light dropdown-toggle d-flex align-items-center" type="button"
                            id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-circle me-2"
                                style="width: 40px; height: 40px;">
                            <span class="fw-bold">Nama User</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li> <a href="{{route('user.logout')}}"><button class="dropdown-item" id="logout-btn">Logout</button></li></a>
                        </ul>
                    </div>
                </div>
            </nav>
            <main>
                <!-- Page Title Start -->

                <!-- Page Title End -->
                <div id="gallery-wrapper" class="flex justify-center" h>
                    <!-- Card 1 -->
                    <div class="2xl:w-1/4 xl:w-1/3 md:w-1/2 p-3 picture-item" data-groups='["creative", "photography"]'>
                        <a class="card image-popup relative overflow-hidden"
                            href="{{ route('user.aboutTicket.card1') }}">
                            <!-- Image -->
                            <img src="{{ asset('assets_main/images/small/img-1.jpg') }}" alt="work-image"
                                class="w-full h-auto">

                            <!-- Badge -->
                            <span
                                class="bg-green-500 text-white text-xs font-semibold px-3 py-1 rounded-full absolute top-4 right-4">
                                Creative
                            </span>

                            <!-- Card Body -->
                            <div class="p-4 bg-white">
                                <div class="flex items-center">
                                    <!-- User Avatar -->
                                    <img src="{{ asset('assets_main/images/users/avatar-1.jpg') }}" alt="user img"
                                        class="w-12 h-12 rounded-full">
                                    <!-- User Info -->
                                    <div class="ml-2">
                                        <h4 class="text-base font-semibold text-gray-800">Mike John</h4>
                                        <p class="text-sm text-gray-500">mikejohn@mail.com</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 2 -->
                    <div class="2xl:w-1/4 xl:w-1/3 md:w-1/2 p-3 picture-item" data-groups='["design", "illustration"]'>
                        <a class="card image-popup relative overflow-hidden"
                            href="{{ route('user.aboutTicket.card2') }}">
                            <!-- Image -->
                            <img src="{{ asset('assets_main/images/small/img-2.jpg') }}" alt="work-image"
                                class="w-full h-auto">

                            <!-- Badge -->
                            <span
                                class="bg-blue-500 text-white text-xs font-semibold px-3 py-1 rounded-full absolute top-4 right-4">
                                Design
                            </span>

                            <!-- Card Body -->
                            <div class="p-4 bg-white">
                                <div class="flex items-center">
                                    <!-- User Avatar -->
                                    <img src="{{ asset('assets_main/images/users/avatar-2.jpg') }}" alt="user img"
                                        class="w-12 h-12 rounded-full">
                                    <!-- User Info -->
                                    <div class="ml-2">
                                        <h4 class="text-base font-semibold text-gray-800">Anna Lee</h4>
                                        <p class="text-sm text-gray-500">annalee@mail.com</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 3 -->
                    <div class="2xl:w-1/4 xl:w-1/3 md:w-1/2 p-3 picture-item" data-groups='["photography", "travel"]'>
                        <a class="card image-popup relative overflow-hidden"
                            href="{{ route('user.aboutTicket.card3') }}">
                            <!-- Image -->
                            <img src="{{ asset('assets_main/images/small/img-3.jpg') }}" alt="work-image"
                                class="w-full h-auto">

                            <!-- Badge -->
                            <span
                                class="bg-red-500 text-white text-xs font-semibold px-3 py-1 rounded-full absolute top-4 right-4">
                                Photography
                            </span>

                            <!-- Card Body -->
                            <div class="p-4 bg-white">
                                <div class="flex items-center">
                                    <!-- User Avatar -->
                                    <img src="{{ asset('assets_main/images/users/avatar-3.jpg') }}" alt="user img"
                                        class="w-12 h-12 rounded-full">
                                    <!-- User Info -->
                                    <div class="ml-2">
                                        <h4 class="text-base font-semibold text-gray-800">John Doe</h4>
                                        <p class="text-sm text-gray-500">johndoe@mail.com</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 4 -->
                    <div class="2xl:w-1/4 xl:w-1/3 md:w-1/2 p-3 picture-item" data-groups='["design", "branding"]'>
                        <a class="card image-popup relative overflow-hidden"
                            href="{{ route('user.aboutTicket.card4') }}">
                            <!-- Image -->
                            <img src="{{ asset('assets_main/images/small/img-4.jpg') }}" alt="work-image"
                                class="w-full h-auto">

                            <!-- Badge -->
                            <span
                                class="bg-yellow-500 text-white text-xs font-semibold px-3 py-1 rounded-full absolute top-4 right-4">
                                Design
                            </span>

                            <!-- Card Body -->
                            <div class="p-4 bg-white">
                                <div class="flex items-center">
                                    <!-- User Avatar -->
                                    <img src="{{ asset('assets_main/images/users/avatar-4.jpg') }}" alt="user img"
                                        class="w-12 h-12 rounded-full">
                                    <!-- User Info -->
                                    <div class="ml-2">
                                        <h4 class="text-base font-semibold text-gray-800">Sarah Paul</h4>
                                        <p class="text-sm text-gray-500">sarahpaul@mail.com</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 5 -->
                    <div class="2xl:w-1/4 xl:w-1/3 md:w-1/2 p-3 picture-item" data-groups='["web", "development"]'>
                        <a class="card image-popup relative overflow-hidden"
                            href="{{ route('user.aboutTicket.card5') }}">
                            <!-- Image -->
                            <img src="{{ asset('assets_main/images/small/img-5.jpg') }}" alt="work-image"
                                class="w-full h-auto">

                            <!-- Badge -->
                            <span
                                class="bg-purple-500 text-white text-xs font-semibold px-3 py-1 rounded-full absolute top-4 right-4">
                                Web Dev
                            </span>

                            <!-- Card Body -->
                            <div class="p-4 bg-white">
                                <div class="flex items-center">
                                    <!-- User Avatar -->
                                    <img src="{{ asset('assets_main/images/users/avatar-5.jpg') }}" alt="user img"
                                        class="w-12 h-12 rounded-full">
                                    <!-- User Info -->
                                    <div class="ml-2">
                                        <h4 class="text-base font-semibold text-gray-800">David Smith</h4>
                                        <p class="text-sm text-gray-500">davidsmith@mail.com</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 6 -->
                    <div class="2xl:w-1/4 xl:w-1/3 md:w-1/2 p-3 picture-item"
                        data-groups='["illustration", "creative"]'>
                        <a class="card image-popup relative overflow-hidden"
                            href="{{ route('user.aboutTicket.card6') }}">
                            <!-- Image -->
                            <img src="{{ asset('assets_main/images/small/img-6.jpg') }}" alt="work-image"
                                class="w-full h-auto">

                            <!-- Badge -->
                            <span
                                class="bg-pink-500 text-white text-xs font-semibold px-3 py-1 rounded-full absolute top-4 right-4">
                                Illustration
                            </span>

                            <!-- Card Body -->
                            <div class="p-4 bg-white">
                                <div class="flex items-center">
                                    <!-- User Avatar -->
                                    <img src="{{ asset('assets_main/images/users/avatar-6.jpg') }}" alt="user img"
                                        class="w-12 h-12 rounded-full">
                                    <!-- User Info -->
                                    <div class="ml-2">
                                        <h4 class="text-base font-semibold text-gray-800">Emily Clark</h4>
                                        <p class="text-sm text-gray-500">emilyclark@mail.com</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 7 -->
                    <div class="2xl:w-1/4 xl:w-1/3 md:w-1/2 p-3 picture-item" data-groups='["graphic", "design"]'>
                        <a class="card image-popup relative overflow-hidden"
                            href="{{ route('user.aboutTicket.card7') }}">
                            <!-- Image -->
                            <img src="{{ asset('assets_main/images/small/img-7.jpg') }}" alt="work-image"
                                class="w-full h-auto">

                            <!-- Badge -->
                            <span
                                class="bg-indigo-500 text-white text-xs font-semibold px-3 py-1 rounded-full absolute top-4 right-4">
                                Graphic Design
                            </span>

                            <!-- Card Body -->
                            <div class="p-4 bg-white">
                                <div class="flex items-center">
                                    <!-- User Avatar -->
                                    <img src="{{ asset('assets_main/images/users/avatar-7.jpg') }}" alt="user img"
                                        class="w-12 h-12 rounded-full">
                                    <!-- User Info -->
                                    <div class="ml-2">
                                        <h4 class="text-base font-semibold text-gray-800">Tom Hardy</h4>
                                        <p class="text-sm text-gray-500">tomhardy@mail.com</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 8 -->
                    <div class="2xl:w-1/4 xl:w-1/3 md:w-1/2 p-3 picture-item" data-groups='["creative", "branding"]'>
                        <a class="card image-popup relative overflow-hidden"
                            href="{{ route('user.aboutTicket.card8') }}">
                            <!-- Image -->
                            <img src="{{ asset('assets_main/images/small/img-8.jpg') }}" alt="work-image"
                                class="w-full h-auto">

                            <!-- Badge -->
                            <span
                                class="bg-orange-500 text-white text-xs font-semibold px-3 py-1 rounded-full absolute top-4 right-4">
                                Branding
                            </span>

                            <!-- Card Body -->
                            <div class="p-4 bg-white">
                                <div class="flex items-center">
                                    <!-- User Avatar -->
                                    <img src="{{ asset('assets_main/images/users/avatar-8.jpg') }}" alt="user img"
                                        class="w-12 h-12 rounded-full">
                                    <!-- User Info -->
                                    <div class="ml-2">
                                        <h4 class="text-base font-semibold text-gray-800">Alice Walker</h4>
                                        <p class="text-sm text-gray-500">alicewalker@mail.com</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

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
