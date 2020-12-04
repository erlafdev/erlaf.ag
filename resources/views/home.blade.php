@extends('layout.layout')
@section('title', 'bienvenue | erlaf.ag')
@section('content')

{{-- <section class="h-687">
    <div class="h-full w-full">
        <img class="hero-header hidden md:inline xl:inline" srcset="{{ asset('imgs/webbanner.png') }}">
        <div class="flex container mx-auto md:py-20 py-20">
            <div class="md:w-1/2 w-full px-10 md:px-20">
                <h1 data-sal="slide-up" data-sal-repeat data-sal-once class="md:text-5xl text-4xl gtfont font-normal" style="--sal-duration: 0.5s; --sal-delay: 0.5s;">Bonjour ! Je suis <b>erlaf</b>, graphiste et dévéloppeur web freelance à bamako.</h1>
                <div class="mt-12" data-sal="slide-up"  data-sal-repeat data-sal-once style="--sal-duration: 0.5s; --sal-delay: 0.5s;">
                    <a href="#" class="py-4 px-8 bg-gray-900 text-white text-2xl gtfont rounded hover:bg-gray-700">Mes services</a>
                </div>
            </div>
        </div>
    </div>|
</section> --}}
<header class="bg-white bg-cover md:py-40 py-28 md:px-20 flex items-center justify-center" style="background-image: url({{ asset('imgs/webbann.png') }}">
    <div class="md:flex items-center justify-center">
        <div class="flex items-center justify-center px-6 w-full md:w-1/2">
            <div class="max-w-7xl text-center">
                <h2 class="text-2xl font-normal gtfont color-dvrk md:text-5xl" data-sal="slide-up" data-sal-repeat data-sal-once style="--sal-duration: 0.5s; --sal-delay: 0.5s;"><b style="color: #0057FF">erlaf.ag</b>, graphiste et dévéloppeur web freelance à bamako.</h2>    
                <div class="flex mt-6 items-center justify-center text-center">
                    <a href="{{ route('service') }}" class="px-12 py-4 block bg-bleu text-white text-xl font-semibold rounded">Mes Services</a>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="">
    <div class="flex items-center flex-wrap w-full h-full">
        <div class="md:w-1/2 w-full md:p-28 p-8 bg-jaune">
            <div class="flex justify-center items-center">
                <img class="w-auto md:h-96 h-64" src="{{ asset('imgs/responsive-screen.png') }}">
            </div>
        </div>
        <div class="md:w-1/2 w-full md:px-20 px-8 md:py-0 py-8">
            <h1 class="gtfont font-normal text-64p">Développement Web</h1>
            <p class="md:mt-6 mt-3 md:text-3xl text-2xl gtfont font-light">
                D’une site vitrine à un site portfolio plus complexe, 
                je vous accompagne dans la création de votre site internet. 
                J’imagine des territoires visuels parfaitement adaptés à chaque support numérique.
            </p>
            <P class="mt-10">
                <a href="#" class="py-4 px-16 bg-jaune text-black gtfont">en savoir plus</a>
            </P>
        </div>
    </div>
</section>

<section class="h-auto pb-4 md:pb-0">
    <div class="flex items-center flex-wrap-reverse w-full h-full">
        <div class="md:w-1/2 w-full md:px-20 px-8 md:py-0 py-8">
            <h1 class="gtfont font-normal text-64p">Design de marque</h1>
            <p class="md:mt-6 mt-3 md:text-3xl text-2xl gtfont font-light">
                De la création d’un logotype à la mise en forme d’une charte graphique complète, 
                je vous accompagne dans l’élaboration de votre nouvelle identité visuelle grâce à une méthodologie précise qui a fait ses preuves.
            </p>
            <P class="mt-10">
                <a href="#" class="py-4 px-16 bg-dark text-white gtfont">en savoir plus</a>
            </P>
        </div>
        <div class="md:w-1/2 w-full md:p-28 p-8 bg-designdemarque">
            <div class="flex justify-center items-center">
                <img class="w-full designdemarque-size" src="{{ asset('imgs/carte-erlafdev.png') }}">
            </div>
        </div>
    </div>
</section>

<section class="h-auto pb-4 md:pb-0">
    <div class="flex items-center flex-wrap w-full h-full">
        <div class="md:w-1/2 w-full md:p-28 p-8 bg-orange">
            <div class="flex justify-center items-center">
                <img class="w-full designdemarque-size" src="{{ asset('imgs/covermusicale.png') }}">
            </div>
        </div>
        <div class="md:w-1/2 w-full md:px-20 px-8 md:py-20 py-8">
            <h1 class="gtfont font-bold text-64p lh-60">Conception<br> de Cover <br> Musicale</h1>
            <P class="mt-10">
                <a href="#" class="py-4 px-16 bg-orange text-black gtfont">en savoir plus</a>
            </P>
        </div>
    </div>
</section>
@endsection

{{-- 
    sal animation 

    <section class="h-screen w-full">
        <H1 class="text-4xl">bonjour le monde</H1>
    </section>
    <section class="h-screen w-full">
        <div
        data-sal="zoom-out"
        data-sal-delay="300"
        data-sal-repeat
        data-sal-once
        ><h1 class="text-5xl">Bonjour le monde</h1></div>
    </section>
    <section class="h-screen w-full">
        <div
        data-sal="zoom-out"
        data-sal-delay="300"
        data-sal-repeat
        data-sal-once
        ><h1 class="text-5xl">Bonjour le monde</h1></div>
    </section>    
    
    
    <div class="py-10 px-10" style="width: 500px; height: 500px;background-color: #f9f9f9">
            <h1 class="text-4xl gtfont font-semibold">Web developer</h1>
            <p class="mt-8 text-2xl gtfont font-normal">
                D’une site vitrine à un site portfolio plus complexe, 
                je vous accompagne dans la création de votre site internet. 
                J’imagine des territoires visuels parfaitement adaptés à chaque support numérique.
            </p>
            <P class="mt-10">
                <a href="#" class="py-4 px-16 bg-gray-900 text-white gtfont">en savoir plus</a>
            </P>
        </div>
--}}