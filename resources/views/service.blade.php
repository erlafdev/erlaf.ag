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
    <section class="container mx-auto md:px-20">
        <section class="flex justify-center items-center md:py-14">
            <div class="">
                <img class="w-96 h-auto" src="{{ asset('imgs/portfolio.svg') }}" alt="" srcset="">
            </div>
            <div class="max-w-md">
                <div class="md:pl-16">
                    <h1 class="gtfont md:text-4xl font-semibold ">Création de site web</h1>
                    <p class=" md:text-2xl gtfont font-normal color-sombre md:mt-2">
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
            <section class="flex justify-center items-center" style="z-index: 3">
                <div class="" style="z-index: 3">
                    <img class="w-96 h-auto" src="{{ asset('imgs/cloud/hosting.png') }}" alt="" srcset="" style="z-index: 3">
                </div>
                <div class="max-w-md" style="z-index: 3">
                    <div class="md:pl-16" style="z-index: 3">
                        <h1 class="gtfont md:text-4xl font-semibold " style="z-index: 3">Hébergement</h1>
                        <p class=" md:text-2xl gtfont font-normal text-white md:mt-2" style="z-index: 3">
                            Votre site internet est hébergé sur un serveur puissant, robuste, supportant la montée en charge et situé au plus proche de vos visiteurs.
                        </p>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <section class="container mx-auto md:px-20">
        <section class="flex justify-center items-center md:py-14">
            <div class="">
                <img class="w-96 h-auto" src="{{ asset('imgs/REFERENCE.svg') }}" alt="" srcset="">
            </div>
            <div class="max-w-md">
                <div class="md:pl-16">
                    <h1 class="gtfont md:text-4xl font-semibold ">Référencement (SEO)</h1>
                    <p class=" md:text-2xl gtfont font-normal color-sombre md:mt-2">
                        Votre site internet est développé avec pour objectif d’apparaître dans les premières pages sur les moteurs de recherche.
                    </p>
                </div>
            </div>
        </section>
    </section>
    <section class="container mx-auto md:px-20">
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
    </section>
    <div class="webdev-content flex justify-center items-center md:h-64 bg-gray-600">
        <div class="flex items-center webdev webdev-animation center-img-animation">
            <img class="h-auto w-28 mr-12" src="{{ asset('imgs/dev/laravel.png') }}" alt="" srcset="">
            <img class="h-auto w-28 mr-12" src="{{ asset('imgs/dev/livewirelogo.svg') }}" alt="" srcset="">
            <img class="h-auto w-28 mr-12" src="{{ asset('imgs/dev/vuejs.png') }}" alt="" srcset="">
            <img class="h-auto w-28 mr-12" src="{{ asset('imgs/dev/tailwind.svg') }}" alt="" srcset="">
        </div>
    </div>
    <section class="container mx-auto md:px-20">
        <section class="flex justify-center items-center md:py-14">
            <div class="hero flex items-center">
                <img class="h-28 w-28 home-icon-cloud home-icon-cloud2" src="{{ asset('imgs/dev/laravel.png') }}" alt="" srcset="">
            </div>
        </section>
    </section>
</div>








{{-- <section class="bg-white">
    <div class="flex items-center">
        <div class="w-1/2 bg-white text-LEFT md: px-20">
            <h1 class="gtfont font-normal text-54p">Création de site web</h1>
            <p class="md:mt-3 mt-2 md:text-3xl text-2xl gtfont font-light">
                La création de site web est indispensable pour améliorer la visibilité de ses activités. 
                Le développement de votre site web est réalisé avec soin et répond aux standards web du W3C.
            </p>
        </div>
        <div class="flex items-center justify-center w-1/2 bg-cover bg-center md:py-44"  style="background-image: url({{ asset('imgs/codeimg.jpg') }}">
            
        </div>
    </div>
</section> --}}

{{-- <section class="h-auto pb-4 md:pb-0">
<div class="flex items-center flex-wrap w-full h-full">
    <div class="md:w-1/2 w-full bg-bleu">
        <div class="flex justify-center items-center">
            <img class="webtemplate bg-cover" src="{{ asset('imgs/webtemplate.png') }}">
        </div>
    </div>
    <div class="md:w-1/2 w-full md:p-0 p-8 bg-langue object-cover">
        <div class="md:px-32 md:py-8">
            <h1 class="gtfont font-normal md:text-4xl text-3xl">Création de site internet</h1>
            <p class="md:mt-4 mt-2 md:text-2xl text-xl gtfont font-light text-gris">
                Exposer votre activité sur internet est aujourd’hui un enjeu crucial. J’imagine et conçois votre site web pour présenter votre entreprise, 
                ses services et ses produits de façon fonctionnelle et en parfaite adéquation avec vos objectifs. Le tout avec un webdesign dans l’air du temps.
            </p>
        </div>
    </div>
</div>
</section>
<section class="h-auto pb-4 md:pb-0">
<div class="flex items-center flex-wrap-reverse w-full h-full">
    <div class="md:w-1/2 w-full md:p-0 p-8 ">
        <div class="md:px-32 md:py-8">
            <h1 class="gtfont font-normal md:text-4xl text-3xl">Référencement (SEO)</h1>
            <p class="md:mt-4 mt-2 md:text-2xl text-xl gtfont font-light text-gris">
                Votre site internet est développé avec pour objectif d’apparaître dans les premières pages sur les moteurs de recherche.
            </p>
        </div>
    </div>
    <div class="md:w-1/2 w-full">
        <div class="flex justify-center items-center">
            <img class="webtemplate bg-cover" src="{{ asset('imgs/seotemplate.png') }}">
        </div>
    </div>
</div>
</section> --}}


@endsection