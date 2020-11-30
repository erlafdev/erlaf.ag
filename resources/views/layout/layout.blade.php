<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sal.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font/gt-font.css') }}">
        @livewireStyles
    </head>
    <body>
        <nav class="bg-white @if (Request::is('/')) {{''}} @else {{ 'shadow' }} @endif" id="app">
            <div class="px-6 py-4 md:flex md:justify-between md:items-center">
                <div class="flex justify-between items-center">
                    <div>
                        <div class="flex justify-center items-center">
                            <img class="h-14 w-14 mr-3" src="{{ asset('imgs/logo/erlafdev.png') }}" alt="Logo erlafDev">
                            <a class="@if (Request::is('/')) {{ 'text-active' }} @endif color-black text-xl font-bold md:text-2xl gtfont" href="#">erlaf.ag</a>
                        </div>
                    </div>
                    
                    <!-- Mobile menu button -->
                    <div class="flex md:hidden">
                        <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
    
                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div class="hidden md:inline">
                    <div class="flex items-center md:mx-6">
                        <a class="@if (Request::is('service')) {{ 'text-active' }} @endif my-1 color-black font-semibold md:mr-4 md:my-0 gtfont" style="font-size:18px" href="{{ route('service') }}">Service</a>
                        <a class="@if (Request::is('design')) {{ 'text-active' }} @endif my-1 color-black font-semibold md:mr-4 md:my-0 gtfont" style="font-size:18px" href="#">Design</a>
                        <a class="@if (Request::is('à-propos')) {{ 'text-active' }} @endif my-1 color-black font-semibold md:mr-4 md:my-0 gtfont" style="font-size:18px" href="#">À propos</a>
                        <a class="@if (Request::is('me-contacter')) {{ 'text-active' }} @endif my-1 color-black font-semibold md:my-0 gtfont" style="font-size:18px" href="#">Me contacter</a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')

        <footer class="w-full bg-dark">
            <div class="container mx-auto px-20 py-20">
                <div class="flex items-center flex-wrap">
                    <div class="md:p-14 md:ml-16 p-6">
                        <h1 class="text-3xl text-white gtfont ">Prestations</h1>
                        <div class="mt-8">
                            <a href="#" class="text-footer text-xl gtfont font-light">Service</a> <br>
                            <a href="#" class="text-footer text-xl gtfont font-light">Design</a> <br>
                            <a href="#" class="text-footer text-xl gtfont font-light">À propos</a>
                        </div>
                    </div>
                    <div class="md:p-14 md:ml-16 p-6">
                        <h1 class="text-3xl text-white gtfont ">Me suivre</h1>
                        <div class="mt-8">
                            <a href="#" class="text-footer text-xl gtfont font-light">Instagram</a> <br>
                            <a href="#" class="text-footer text-xl gtfont font-light">Twitter</a> <br>
                            <a href="#" class="text-footer text-xl gtfont font-light">Facebook</a>
                        </div>
                    </div>
                    <div class="md:p-14 md:ml-16 p-6">
                        <h1 class="text-3xl text-white gtfont ">Contact</h1>
                        <div class="mt-8">
                            <a href="#" class="text-footer text-xl gtfont font-light">erlafdev@gmail.com</a> <br>
                            <a href="tel:90643384" class="text-footer text-xl gtfont font-light">223 90 64 33 84</a> <br>
                            <a href="#" class="text-footer text-xl gtfont font-light">Instagram : erlaf_</a>
                        </div>
                    </div>
                    <div class="md:p-14 md:ml-16 p-6">
                        <img class="h-40 w-auto" src="{{ asset('imgs/logo/erlafdev-gris.png') }}" alt="" srcset="">
                    </div>
                </div>
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}"></script>
         @livewireScripts
    </body>
</html>