@extends('layout.layout')
@section('title', 'Design | erlaf.ag')
@section('content')
    <header class="flex justify-center items-center md:py-12 py-8  bg-center bg-repeat" style="background-image: url('{{ asset('imgs/design-tools.jpg') }}')">
        <div class="md:py-10 max-w-2xl">
            <div class="">
                <h1 class="gtfont font-black text-6xl text-white tracking-in-contract-bck-bottom">Design</h1>
            </div>
        </div>
    </header>
    <section class="container mx-auto md:px-20 px-14">
        <section class="flex justify-center items-center md:py-16 py-6">
            <div class="md:inline hidden">
                <img class="md:w-96 w-72 h-auto" src="{{ asset('imgs/design-direction.svg') }}" alt="" srcset="">
            </div>
            <div class="md:max-w-md">
                <div class="md:pl-16 md:px-0">
                    <h1 class="gtfont md:text-4xl text-3xl font-semibold ">La bonne direction</h1>
                    <p class=" md:text-2xl text-xl gtfont font-normal color-sombre md:mt-2">
                        Afin de définir la direction artistique la plus adaptée à votre marque, nous commencerons par identifier vos besoins. 
                        Cette première étape s’articule autour d’une série de questions-réponses qui permettra la mise en place d’un brief créatif précis.
                    </p>
                </div>
            </div>
        </section>
    </section>
    <section class="container mx-auto md:px-20 px-14">
        <section class="flex justify-center items-center md:py-16 py-6">
            <div class="md:inline hidden">
                <img class="md:w-96 w-72 h-auto" src="{{ asset('imgs/design-search.svg') }}" alt="" srcset="">
            </div>
            <div class="md:max-w-md">
                <div class="md:pl-16 md:px-0">
                    <h1 class="gtfont md:text-4xl text-3xl font-semibold ">En avant la recherche</h1>
                    <p class=" md:text-2xl text-xl gtfont font-normal color-sombre md:mt-2">
                        Une fois vos besoins identifiés, la phase de recherche et conception graphique peut commencer. Brainstorming, 
                        concepts novateurs, palette de couleurs, explorations typographiques … 
                        Il s’agit de trouver la réponse créative qui fera briller les promesses et les valeurs de votre marque.
                    </p>
                </div>
            </div>
        </section>
    </section>
    <section class="container mx-auto md:px-20 px-14">
        <section class="flex justify-center items-center md:py-16 py-6">
            <div class="md:inline hidden">
                <img class="md:w-96 w-72 h-auto" src="{{ asset('imgs/design-final.svg') }}" alt="" srcset="">
            </div>
            <div class="md:max-w-md">
                <div class="md:pl-16 md:px-0">
                    <h1 class="gtfont md:text-4xl text-3xl font-semibold ">Finalisation</h1>
                    <p class=" md:text-2xl text-xl gtfont font-normal color-sombre md:mt-2">
                        Après avoir choisi et affiné ensemble l’une des pistes créatives proposées, tous les éléments graphiques finalisés vous seront fournis. 
                        Un guide d’utilisation de votre nouvelle identité visuelle sera à votre disposition afin d’assurer une harmonie de tous vos supports.
                    </p>
                </div>
            </div>
        </section>
    </section>
@endsection