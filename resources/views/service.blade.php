@extends('layout.layout')
@section('title', 'Service Web | erlaf.ag')
@section('content')

<header class="flex justify-center items-center md:py-12 py-8 bg-cover bg-pan-left">
        <div class="md:py-10 max-w-2xl">
            <div class="">
                <h1 class="gtfont font-black text-6xl text-white tracking-in-contract-bck-bottom">mes services</h1>
            </div>
        </div>
</header>
<div style="background-color: #f2e9e494">
    <section class="container mx-auto md:px-20 px-14">
        <section class="flex justify-center items-center md:py-14 py-6">
            <div class="md:inline hidden">
                <img class="md:w-96 w-72 h-auto" src="{{ asset('imgs/portfolio.svg') }}" alt="" srcset="">
            </div>
            <div class="md:max-w-md">
                <div class="md:pl-16 md:px-0">
                    <h1 class="gtfont md:text-4xl text-3xl font-semibold ">Création de site web</h1>
                    <p class=" md:text-2xl text-xl gtfont font-normal color-sombre md:mt-2">
                        La création de site web est indispensable pour améliorer la visibilité de ses activités. 
                        Le développement de votre site web est réalisé avec soin et répond aux standards web du W3C.
                    </p>
                </div>
            </div>
        </section>
    </section>
    <div class="hero">
        <img class="home-icon-cloud home-icon-cloud2" src="{{ asset('imgs/cloud/1.svg') }}" alt="Cloud2" style="z-index: 2">
        <img class="home-icon-cloud home-icon-cloud2" src="{{ asset('imgs/cloud/1.svg') }}" alt="Cloud2" style="z-index: 2">
        <img class="home-icon-cloud home-icon-cloud1" src="{{ asset('imgs/cloud/2.svg') }}" alt="Cloud1" style="z-index: 2">
        <img class="home-icon-cloud home-icon-cloud1" src="{{ asset('imgs/cloud/2.svg') }}" alt="Cloud1" style="z-index: 2"> 
        <section class="container mx-auto md:px-20" style="z-index: 3">
            <section class="flex justify-center items-center md:px-0 px-14" style="z-index: 3">
                <div class="hidden md:inline" style="z-index: 3">
                    <img class="w-96 h-auto" src="{{ asset('imgs/cloud/hosting.png') }}" alt="" srcset="" style="z-index: 3">
                </div>
                <div class="max-w-md" style="z-index: 3">
                    <div class="md:pl-16" style="z-index: 3">
                        <h1 class="gtfont md:text-4xl text-3xl font-semibold " style="z-index: 3">Hébergement</h1>
                        <p class=" md:text-2xl text-xl gtfont font-normal text-white md:mt-2" style="z-index: 3">
                            Votre site internet est hébergé sur un serveur puissant, robuste, supportant la montée en charge et situé au plus proche de vos visiteurs.
                        </p>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <section class="container mx-auto md:px-20 px-14">
        <section class="flex justify-center items-center md:py-14 py-6">
            <div class="md:inline hidden">
                <img class="w-96 h-auto" src="{{ asset('imgs/REFERENCE.svg') }}" alt="" srcset="">
            </div>
            <div class="max-w-md">
                <div class="md:pl-16">
                    <h1 class="gtfont md:text-4xl text-3xl font-semibold ">Référencement (SEO)</h1>
                    <p class=" md:text-2xl text-xl gtfont font-normal color-sombre md:mt-2">
                        Votre site internet est développé avec pour objectif d’apparaître dans les premières pages sur les moteurs de recherche.
                    </p>
                </div>
            </div>
        </section>
    </section>
    {{-- <section class="container mx-auto md:px-20">
        <section class="flex justify-center items-center md:py-14">
            <div class="max-w-md">
                <div class="md:pr-16">
                    <h1 class="gtfont md:text-4xl font-semibold ">Mes outils pour le web</h1>
                    <ul class="flex flex-col">
                        <li class="flex flex-row mb-2">
                          <a href="https://laravel.com/" target="blank" class="select-none cursor-pointer flex flex-1 items-center p-4" style="background-color: #E1DCDA">
                            <div class="flex flex-col rounded-md w-10 h-10 justify-center items-center mr-4">
                                <img src="{{ asset('imgs/dev/laravel.png') }}" alt="" srcset="">
                            </div>
                            <div class="flex-1 pl-1 mr-16">
                              <div class="font-medium">Laravel</div>
                            </div>
                          </a href="">
                        </li>
                        <li class="flex flex-row mb-2">
                          <a href="https://laravel-livewire.com/" target="blank" class="select-none cursor-pointer flex flex-1 items-center p-4" style="background-color: #E1DCDA">
                            <div class="flex flex-col rounded-md w-10 h-10 justify-center items-center mr-4">
                                <img src="{{ asset('imgs/dev/livewirelogo.svg') }}" alt="" srcset="">
                            </div>
                            <div class="flex-1 pl-1 mr-16">
                              <div class="font-medium">Livewire</div>
                            </div>
                          </a href="">
                        </li>
                        <li class="flex flex-row mb-2">
                          <a href="https://tailwindcss.com/" target="blank" class="select-none cursor-pointer flex flex-1 items-center p-4" style="background-color: #E1DCDA">
                            <div class="flex flex-col rounded-md w-10 h-10 justify-center items-center mr-4">
                                <img src="{{ asset('imgs/dev/tailwind.svg') }}" alt="" srcset="">
                            </div>
                            <div class="flex-1 pl-1 mr-16">
                              <div class="font-medium">Tailwind Css</div>
                            </div>
                          </a href="">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="">
                <img class="w-96 h-auto" src="{{ asset('imgs/js.svg') }}" alt="" srcset="">
            </div>
        </section>
    </section> --}}
    <div class="webdev-content flex justify-center items-center h-64 bg-black">
        <div class="flex items-center webdev webdev-animation center-img-animation" >
            <img class="h-auto w-28 mr-12" src="{{ asset('imgs/dev/laravel.png') }}" alt="" style="z-index: 1">
            <img class="h-auto w-28 mr-12" src="{{ asset('imgs/dev/livewirelogo.svg') }}" alt="" style="z-index: 1">
            <img class="h-auto w-28 mr-12" src="{{ asset('imgs/dev/vuejs.png') }}" alt="" style="z-index: 1">
            <img class="h-auto w-28 mr-12" src="{{ asset('imgs/dev/tailwind.svg') }}" alt="" style="z-index: 1">
        </div>
        <section class="container mx-auto md:px-20" >
            <section class="flex justify-center items-center md:py-12" >
                <h1 style="z-index: 2" class="text-xl gtfont font-bold px-8 py-5 bg-white-transparent text-black rounded-full">Mes outils pour le web</h1>
            </section>
        </section>
    </div>
</div>

<section class="flex items-center">
    <div class="md:w-1/2 bg-cover">
        <img class="w-full h-auto" src="{{ asset('imgs/svg/thur.svg') }}" alt="" srcset="">
    </div>
    <div class="md:ml-14">
        <h1 class="md:text-5xl text-4xl gtfont font-black mb-2">Graphisme</h1>
        <h1 class="md:text-5xl text-4xl gtfont font-black mb-2">Identité Visuelle</h1>
        <h1 class="md:text-5xl text-4xl gtfont font-black mb-2">Typographie</h1>
        <h1 class="md:text-5xl text-4xl gtfont font-black mb-2">Publicité</h1>
        <h1 class="md:text-5xl text-4xl gtfont font-black">Cover Album</h1>

        <a href="{{ route('design') }}" class="md:text-xl flex justify-between px-8 py-5 bg-bleu text-white gtfont gtfont-500 rounded-xl mt-5">Design 
            <img class="ml-2" src="{{ asset('imgs/dev/fleche.png') }}" alt="" style="filter: invert(100%)">
        </a>
    </div>
</section>
@endsection