@extends('/layouts/master')

@section('component')
<div class="bg-black min-h-screen">
  <div class="mx-auto container text-center">
    <h5 class="mb-4 text-3xl font-bold leading-none tracking-tigh md:text-3xl lg:text-5xl text-white pt-6">Ecco il film appena aggiunto da te</h5>
    <h5 class="font-bold text-4xl mb-2 text-white">{{$film->title_film}}</h5>
  @include('.components.component.card-show')
 </div>
</div>
@endsection
