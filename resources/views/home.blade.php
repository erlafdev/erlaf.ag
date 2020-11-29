@extends('layout.layout')
@section('title', 'bienvenue | erlaf.ag')
@section('content')

<header class="">
    <div class="h-full w-full">
        <img class="hero-header hidden md:inline xl:inline" loading="eager" srcset="{{ asset('imgs/webbanner.png') }}, width="1800" height="911" alt="Abstract shapes colored green and gray">
        <div class="flex container mx-auto md:py-20 py-20">
            <div class="md:w-1/2 w-full px-10 md:px-20">
                <h1 data-sal="slide-up" data-sal-repeat data-sal-once class="md:text-5xl text-4xl gtfont font-normal" style="--sal-duration: 0.5s; --sal-delay: 0.5s;">Bonjour ! Je suis <b>erlaf</b>, graphiste et dévéloppeur web freelance à bamako.</h1>
                <div class="mt-12" data-sal="slide-up"  data-sal-repeat data-sal-once style="--sal-duration: 0.5s; --sal-delay: 0.5s;">
                    <a href="#" class="py-4 px-8 bg-gray-900 text-white text-2xl gtfont rounded hover:bg-gray-700">Mes services</a>
                </div>
            </div>
        </div>
    </div>
</header>

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
    
    
    
--}}