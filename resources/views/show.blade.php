@extends('/layouts/master')

@section('component')
<div class="bg-black min-h-screen">
  <div class="mx-auto container text-center">
    <h4 class="mb-4 text-4xl font-extrabold leading-none tracking-tigh md:text-3xl lg:text-5xl text-white pt-6">Ecco il film appena aggiunto da te</h4>
  @include('.components.component.card-show')
 
  
 
 </div>
</div>
@endsection
