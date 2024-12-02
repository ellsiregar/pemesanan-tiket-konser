@extends('frontend.user.layouts.app')

@section('tittle', 'Dashboard')

@section('content')

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
@endsection
