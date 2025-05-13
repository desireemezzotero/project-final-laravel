@extends('layouts/master')

@section('component')
<div class="bg-black min-h-screen">
  <div class="mx-auto container">

   <div class="relative container mx-auto h-[500px] bg-black">
    <video
        class="absolute top-0 left-0 w-full h-full object-cover"
        autoplay
        loop
        playsinline
      >
        <source src="{{asset('img/biancaneve.mp4')}}" type="video/mp4" />
      </video>
</div>


    {{-- i preferiti --}}
    <h4 class="mb-4 text-3xl font-extrabold leading-none tracking-tigh md:text-2xl lg:text-4xl text-white pt-6">I preferiti</h4>
    <swiper-container class="mySwiper h-[450px] w-full" slides-per-view="4" centered-slides="true"
    space-between="20" pagination="true" pagination-type="fraction" navigation="true">

     @foreach ($films as $film)
       @if($film->id >= 75 && $film->id <= 80)
          <swiper-slide class="flex justify-center items-center">
            <a href="{{ route('film.show', $film->id) }}" class="block w-full h-full">
              <img src="{{ asset('storage/' . $film->image) }}" alt="image-film" class="w-full h-full object-contain transition-transform duration-300 hover:scale-105" />
            </a>
          </swiper-slide>
        @endif
     @endforeach
    </swiper-container>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

     {{-- i preferiti --}}
     <h4 class="mb-4 text-3xl font-extrabold leading-none tracking-tigh md:text-2xl lg:text-4xl text-white pt-6">I più conosciuti</h4>
    <swiper-container class="mySwiper h-[450px] w-full" slides-per-view="4" centered-slides="true"
    space-between="20" pagination="true" pagination-type="fraction" navigation="true">

     @foreach ($films as $film)
       @if($film->id >= 48 && $film->id <= 58 )  
          <swiper-slide class="flex justify-center items-center">
            <a href="{{ route('film.show', $film->id) }}" class="block w-full h-full">
              <img src="{{ asset('storage/' . $film->image) }}" alt="image-film" class="w-full h-full object-contain transition-transform duration-300 hover:scale-105" />
            </a>
          </swiper-slide>
        @endif
     @endforeach
    </swiper-container>

  </div>
</div>
@endsection


        