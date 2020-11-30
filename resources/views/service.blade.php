@extends('layout.layout')
@section('title', 'Service Web | erlaf.ag')
@section('content')
<section class="h-auto pb-4 md:pb-0">
    <div class="flex items-center flex-wrap-reverse w-full h-full">
        <div class="md:w-1/2 w-full p-8">
            <div class="md:px-32">
                <h1 class="gtfont font-normal text-54p">Développement de site web</h1>
                <p class="md:mt-4 mt-3 md:text-3xl text-2xl gtfont font-light">
                    La création de site web est indispensable pour améliorer la visibilité de ses activités. 
                    Le développement de votre site web est réalisé avec soin et répond aux standards web du W3C.
                </p>
            </div>
        </div>
        <div class="md:w-1/2 w-full md:p-36 p-8 bg-jaune">
            <div class="flex justify-center items-center">
                <img class="w-auto md:h-96 h-64" src="{{ asset('imgs/responsive-screen.png') }}">
            </div>
        </div>
    </div>
</section>
<section class="h-auto pb-4 md:pb-0">
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
</section>
@endsection