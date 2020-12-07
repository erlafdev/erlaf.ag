@extends('layout.layout')
@section('title', 'Service Web | erlaf.ag')
@section('content')

<header class="flex justify-center items-center md:py-12 py-8 bg-cover service-bg">
        <div class="md:py-10">
            <h1 class="gtfont font-black text-6xl text-white">mes services</h1>
        </div>
</header>
<div style="background-color: #f2e9e494">
    <section class="container mx-auto md:px-20">
        <section class="flex justify-center items-center flex-wrap md:py-14">
            <div class="flex items-center justify-center flex-wrap md:w-1/2 w-full">
                <div class="md:pl-20">
                    <h1 class="gtfont md:text-4xl font-semibold ">Création de site web</h1>
                    <p class=" md:text-2xl gtfont font-normal color-sombre">
                        La création de site web est indispensable pour améliorer la visibilité de ses activités. 
                        Le développement de votre site web est réalisé avec soin et répond aux standards web du W3C.
                    </p>
                </div>
            </div>
            <div class="flex justify-center flex-wrap md:w-1/2 w-full">
                <img class="w-96 h-auto" src="{{ asset('imgs/sitedev.png') }}" alt="" srcset="">
            </div>
        </section>
    </section>
        <div class="hero">
            <img class="home-icon-cloud home-icon-cloud2" src="{{ asset('imgs/cloud/1.svg') }}" alt="Cloud2" style="z-index: 10">
            <img class="home-icon-cloud home-icon-cloud2" src="{{ asset('imgs/cloud/1.svg') }}" alt="Cloud2" style="z-index: 10">
            <img class="home-icon-cloud home-icon-cloud1" src="{{ asset('imgs/cloud/2.svg') }}" alt="Cloud1" style="z-index: 10">
            <img class="home-icon-cloud home-icon-cloud1" src="{{ asset('imgs/cloud/2.svg') }}" alt="Cloud1" style="z-index: 10"> 
            
            <section class="container mx-auto md:px-20" >
                <section class="flex justify-center items-center flex-wrap">
                    <div class="flex justify-center flex-wrap md:w-1/2 w-full">
                        <img class="w-96 h-auto" src="{{ asset('imgs/cloud/hosting.png') }}" alt="" srcset="" style="z-index: 100">
                    </div>
                    <div class="flex items-center justify-center flex-wrap md:w-1/2 w-full">
                        <div class="md:pr-20">
                            <h1 class="gtfont md:text-4xl font-semibold " style="z-index: 100">Hébergement</h1>
                            <p class=" md:text-2xl gtfont font-normal text-white" style="z-index: 100">
                                Votre site internet est hébergé sur un serveur puissant, robuste, supportant la montée en charge et situé au plus proche de vos visiteurs.
                            </p>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    <section class="container mx-auto md:px-20">
        <section class="flex justify-center items-center flex-wrap md:py-14">
            <div class="flex items-center justify-center flex-wrap md:w-1/2 w-full">
                <div class="md:pl-20">
                    <h1 class="gtfont md:text-4xl font-semibold ">Référencement (SEO)</h1>
                    <p class=" md:text-2xl gtfont font-normal color-sombre">
                        Votre site internet est développé avec pour objectif d’apparaître dans les premières pages sur les moteurs de recherche.
                    </p>
                </div>
            </div>
            <div class="flex justify-center flex-wrap md:w-1/2 w-full">
                <img class="w-96 h-auto" src="{{ asset('imgs/sitedev.png') }}" alt="" srcset="">
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