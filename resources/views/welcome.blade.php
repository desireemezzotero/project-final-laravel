@extends('layouts/master')

@section('component')
<div class="bg-black min-h-screen">
  <div class="mx-auto container text-center">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tigh md:text-3xl lg:text-5xl text-white pt-6">SCEGLI IL FILM <br> CHE FA AL CASO TUO!</h1>
    @livewire('product-filter')
  </div>
</div>
@endsection
