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
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Icons css  (Mandatory in All Pages) -->
    <link href="{{ asset('assets_main/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- App css  (Mandatory in All Pages) -->
    <link href="{{ asset('assets_main/css/app.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="wrapper">

        <!-- Start Sidebar -->
        <aside id="app-menu"
            class="hs-overlay fixed inset-y-0 start-0 z-60 hidden w-sidenav min-w-sidenav bg-default-900 overflow-y-auto -translate-x-full transform transition-all duration-200 hs-overlay-open:translate-x-0 lg:bottom-0 lg:end-auto lg:z-30 lg:block lg:translate-x-0 rtl:translate-x-full rtl:hs-overlay-open:translate-x-0 rtl:lg:translate-x-0 print:hidden [--body-scroll:true] [--overlay-backdrop:true] lg:[--overlay-backdrop:false]">

            <div class="flex flex-col h-full">
                <!-- Sidenav Logo -->
                <div class="sticky top-0 flex h-topbar items-center justify-between px-6">
                    <a href="index.html">
                        <img src="{{ asset('assets_main/images/logo-light.png') }}" alt="logo" class="flex h-8">
                    </a>
                </div>

                <div class="p-4 h-[calc(100%-theme('spacing.topbar'))] flex-grow" data-simplebar>
                    <!-- Menu -->
                    <ul class="admin-menu hs-accordion-group flex w-full flex-col gap-1">
                        <li class="menu-item">
                            <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                href="index.html">
                                <i class="i-tabler-photo text-2xl"></i>
                               Konser
                            </a>
                        </li>

                        <li class="px-3 py-2 text-sm font-medium text-default-400">Pages</li>

                        <li class="menu-item">
                            <a href="starter-page.html"
                                class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                <i class="i-tabler-clipboard text-2xl"></i>
                                <span class="menu-text"> Starter Pages </span>
                            </a>
                        </li>

                        <li class="px-3 py-2 text-sm font-medium text-default-400">Elements</li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)"
                                class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5 hs-accordion-active:bg-default-100/5 hs-accordion-active:text-default-100">
                                <i class="i-tabler-layout-2 text-2xl"></i>
                                <span class="menu-text"> Components </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                                <ul class="mt-1 space-y-1">
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-accordion.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Accordion
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-alerts.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Alert
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-avatars.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Avatars
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-buttons.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Buttons
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-badges.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Badges
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-breadcrumbs.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Breadcrumbs
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-cards.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Cards
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-collapse.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Collapse
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-dropdowns.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Dropdowns
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-progress.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Progress
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-spinners.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Spinners
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-skeleton.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Skeleton
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-ratio.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Ratio
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-modals.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Modals
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-offcanvas.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Offcanvas
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-popovers.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Popovers
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-tooltips.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Tooltips
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                            href="ui-typography.html">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            Typography
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)"
                                class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5 hs-accordion-active:bg-default-100/5 hs-accordion-active:text-default-100">
                                <i class="i-tabler-checkbox text-2xl"></i>
                                <span class="menu-text"> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                                <ul class="mt-1 space-y-1">
                                    <li class="menu-item">
                                        <a href="forms-inputs.html"
                                            class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            <span class="menu-text">Inputs</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-check-radio.html"
                                            class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            <span class="menu-text">Checkbox & Radio</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-masks.html"
                                            class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            <span class="menu-text">Input Masks</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-file-upload.html"
                                            class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            <span class="menu-text">File Upload</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-editor.html"
                                            class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            <span class="menu-text">Editor</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-validation.html"
                                            class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            <span class="menu-text">Validation</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="forms-layout.html"
                                            class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            <span class="menu-text">Form Layout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="maps-vector.html"
                                class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                <i class="i-tabler-map-pin text-2xl"></i>
                                <span class="menu-text"> Maps </span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="tables-basic.html"
                                class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5 hs-accordion-active:bg-default-100/5 hs-accordion-active:text-default-100">
                                <i class="i-tabler-table text-2xl"></i>
                                <span class="menu-text"> Tables </span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="charts-apex.html"
                                class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5 hs-accordion-active:bg-default-100/5 hs-accordion-active:text-default-100">
                                <i class="i-tabler-chart-donut-2 text-2xl"></i>
                                <span class="menu-text"> Chart </span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="icons.html"
                                class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                <i class="i-tabler-icons text-2xl"></i>
                                <span class="menu-text"> Icons </span>
                            </a>
                        </li>

                        <li class="menu-item hs-accordion">
                            <a href="javascript:void(0)"
                                class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5 hs-accordion-active:bg-default-100/5 hs-accordion-active:text-default-100">
                                <span class="i-tabler-list-details text-2xl"></span>
                                <span class="menu-text"> Level </span>
                                <span class="menu-arrow"></span>
                            </a>

                            <div id="sidenavLevel"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                                <ul class="mt-1 space-y-1">
                                    <li class="menu-item">
                                        <a href="javascript: void(0)"
                                            class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            <span class="menu-text">Item 1</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="javascript: void(0)"
                                            class="flex items-center gap-x-3.5 rounded-md px-3 py-1.5 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                            <i class="i-tabler-circle-filled scale-[.2] text-2xl opacity-75"></i>
                                            <span class="menu-text">Item 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a href="javascript:void(0)"
                                class="hs-accordion-toggle group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5 hs-accordion-active:bg-default-100/5 hs-accordion-active:text-default-100">
                                <span class="i-tabler-rosette-discount-check text-2xl"></span>
                                <span class="menu-text"> Badge Items </span>
                                <span
                                    class="ms-auto inline-flex items-center gap-x-1.5 py-0.5 px-2 rounded-md font-semibold text-xs bg-default-800 text-white">Hot</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </aside>
        <!-- End Sidebar -->

        <!-- Start Page Content here -->
        <div class="page-content">

            <main>

                <!-- Page Title Start -->
                <div class="flex items-center md:justify-between flex-wrap gap-2 mb-10">
                    <h4 class="text-default-900 text-2xl font-medium">Image Gallery</h4>

                    <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
                        <a href="#" class="text-sm font-medium text-default-700">Minimage</a>

                        <i class="i-tabler-chevron-right text-lg flex-shrink-0 text-default-500 rtl:rotate-180"></i>

                        <a href="#" class="text-sm font-medium text-default-700">Menu</a>

                        <i class="i-tabler-chevron-right text-lg flex-shrink-0 text-default-500 rtl:rotate-180"></i>

                        <a href="#" class="text-sm font-medium text-default-700" aria-current="page">Image Gallery</a>
                    </div>
                </div>
                <!-- Page Title End -->


                <div class="w-full filters-group-wrap mb-3">
                    <ul class="filter-options flex flex-wrap gap-4">
                        <li class="active" data-group="all"><a href="javascript:void(0)" class="btn">All
                                Items</a></li>
                        <li data-group="design"><a href="javascript:void(0)" class="btn">Design</a></li>
                        <li data-group="creative"><a href="javascript:void(0)" class="btn">Creative</a>
                        </li>
                        <li data-group="branding"><a href="javascript:void(0)" class="btn">Branding</a>
                        </li>
                        <li data-group="photography"><a href="javascript:void(0)" class="btn">Photography</a>
                        </li>
                    </ul>
                </div>

                <div id="gallery-wrapper" class="flex justify-center">
                    <!-- Card 1 -->
                    <div class="2xl:w-1/4 xl:w-1/3 md:w-1/2 p-3 picture-item" data-groups='["creative", "photography"]'>
                        <a class="card image-popup relative overflow-hidden" href="{{ asset('assets_main/images/small/img-1.jpg') }}">
                            <!-- Image -->
                            <img src="{{ asset('assets_main/images/small/img-1.jpg') }}" alt="work-image" class="w-full h-auto">

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
                        <a class="card image-popup relative overflow-hidden" href="{{ asset('assets_main/images/small/img-2.jpg') }}">
                            <!-- Image -->
                            <img src="{{ asset('assets_main/images/small/img-2.jpg') }}" alt="work-image" class="w-full h-auto">

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
                        <a class="card image-popup relative overflow-hidden" href="{{ asset('assets_main/images/small/img-3.jpg') }}">
                            <!-- Image -->
                            <img src="{{ asset('assets_main/images/small/img-3.jpg') }}" alt="work-image" class="w-full h-auto">

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
                        <a class="card image-popup relative overflow-hidden" href="{{ asset('assets_main/images/small/img-4.jpg') }}">
                            <!-- Image -->
                            <img src="{{ asset('assets_main/images/small/img-4.jpg') }}" alt="work-image" class="w-full h-auto">

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
                        <a class="card image-popup relative overflow-hidden" href="assets/images/small/img-5.jpg">
                            <!-- Image -->
                            <img src="{{ asset('assets_main/images/small/img-5.jpg') }}" alt="work-image" class="w-full h-auto">

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
                        <a class="card image-popup relative overflow-hidden" href="{{ asset('assets_main/images/small/img-6.jpg') }}">
                            <!-- Image -->
                            <img src="{{ asset('assets_main/images/small/img-6.jpg') }}" alt="work-image" class="w-full h-auto">

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
                        <a class="card image-popup relative overflow-hidden" href="{{ asset('assets_main/images/small/img-7.jpg') }}">
                            <!-- Image -->
                            <img src="{{ asset('assets_main/images/small/img-7.jpg') }}" alt="work-image" class="w-full h-auto">

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
                        <a class="card image-popup relative overflow-hidden" href="{{ asset('assets_main/images/small/img-8.jpg') }}">
                            <!-- Image -->
                            <img src="{{ asset('assets_main/images/small/img-8.jpg') }}" alt="work-image" class="w-full h-auto">

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
                        <script>document.write(new Date().getFullYear())</script> © Minimage
                    </div>
                    <div class="md:flex hidden gap-2 item-center md:justify-end">
                        Design &amp; Develop by<a href="#" class="text-primary">MyraStudio</a>
                    </div>
                </div>
            </footer>
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
    <script src="{{ asset('asset_main/libs/glightbox/js/glightbox.min.js')}}"></script>

    <!-- Filtter Demo js -->
    <script src="{{ asset('assets_main/js/pages/gallery.js') }}"></script>

</body>

</html>
