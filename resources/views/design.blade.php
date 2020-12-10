@extends('layout.layout')
@section('title', 'Design | erlaf.ag')
@section('content')
    <header class="flex justify-center items-center md:py-12 py-8  bg-center bg-repeat" style="background-image: url('{{ asset('imgs/design-tools.jpg') }}')">
        <div class="md:py-10 max-w-2xl">
            <div class="">
                <h1 class="gtfont font-black text-6xl text-white ">Design</h1>
            </div>
        </div>
    </header>
    <!-- component -->
<!-- This is an example component -->
<div class="bg-f9">    
    <div class="container mx-auto">
        <div class="flex flex-wrap  overflow-hidden">
            <div class="my-1 w-full overflow-hidden sm:my-1 sm:w-1/2 md:my-1  md:w-1/2 lg:my-1  lg:w-1/2 xl:my-1  xl:w-1/2">
                <div class="py-4 md:px-0 px-6  flex md:justify-end justify-center items-center">
                    <div class="inline-grid md:max-w-xs max-w-lg sm:max-w-xs lg:max-w-lg lg:flex bg-white rounded-lg pb-6 lg:pb-0 shadows-md border-2 ">
                        <div class="w-full lg:w-1/3 lg:p-4">
                            <!-- <img src="img/profile.jpg" alt="profile picture" class="rounded-lg"> -->
                            <img src="{{ asset('imgs/design-direction.svg') }}" alt="image" class="h-64 lg:h-full object-cover object-center w-full">
                        </div>         
                        <div class="w-full lg:w-2/3 p-4">
                            <div class="inline-grid md:max-h-56">
                                <p class="gtfont font-bold text-xl text-black">La bonne direction</p>
                                <p class="gtfont font-normal text-15 my-2 text-black opacity-75">
                                    Afin de définir la direction artistique la plus adaptée à votre marque, nous commencerons par identifier vos besoins. 
                                    Cette première étape s’articule autour d’une série de questions qui permettra la mise en place d’un brief créatif précis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="my-1 w-full overflow-hidden sm:my-1 sm:w-1/2 md:my-1  md:w-1/2 lg:my-1  lg:w-1/2 xl:my-1  xl:w-1/2">
                <div class="py-4 md:px-6 px-6 flex md:justify-start justify-center items-center">
                    <div class="inline-grid md:max-w-xs max-w-lg sm:max-w-xs lg:max-w-lg lg:flex bg-white rounded-lg pb-6 lg:pb-0 shadows-md border-2">
                        <div class="w-full lg:w-1/3 lg:p-4">
                            <!-- <img src="img/profile.jpg" alt="profile picture" class="rounded-lg"> -->
                            <img src="{{ asset('imgs/design-search.svg') }}" alt="image" class="h-64 lg:h-full object-cover object-center w-full">
                        </div>
            
                        <div class="w-full lg:w-2/3 p-4">
                            <div class="inline-grid md:max-h-56">
                                <p class="gtfont font-bold text-xl text-black">En avant la recherche</p>
                                <p class="gtfont font-normal text-15 my-2 text-black opacity-75">
                                    Une fois vos besoins identifiés, la phase de recherche et conception graphique peut commencer. Explorations typographiques … 
                                    Il s’agit de trouver la réponse créative qui fera briller les promesses et les valeurs de votre marque.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="my-1 w-full overflow-hidden sm:my-1 sm:w-1/2 md:my-1  md:w-1/2 lg:my-1  lg:w-1/2 xl:my-1  xl:w-1/2">
                <div class="py-4 md:px-0 px-6  flex md:justify-end justify-center items-center">
                    <div class="inline-grid md:max-w-xs max-w-lg sm:max-w-xs lg:max-w-lg lg:flex  bg-white rounded-lg pb-6 lg:pb-0 shadows-md border-2">
                        <div class="w-full lg:w-1/3 lg:p-4">
                            <!-- <img src="img/profile.jpg" alt="profile picture" class="rounded-lg"> -->
                            <img src="{{ asset('imgs/design-final.svg') }}" alt="image" class="h-64 lg:h-full object-cover object-center w-full">
                        </div>
            
                        <div class="w-full lg:w-2/3 p-4">
                            <div class="inline-grid md:max-h-56">
                                <p class="gtfont font-bold text-xl text-black">Finalisation</p>
                                <p class="gtfont font-normal text-15 my-2 text-black opacity-75">
                                    Après avoir choisi et affiné ensemble l’une des pistes créatives proposées, tous les éléments graphiques finalisés vous seront fournis. 
                                    Un guide d’utilisation de votre nouvelle identité visuelle sera à votre disposition afin d’assurer une harmonie de tous vos supports.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>   
@endsection