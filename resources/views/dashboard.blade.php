@extends('/layouts/master')

@section('component')
<div class="bg-black min-h-screen flex pt-40">
  <div class="mx-auto container text-center">
    <h5 class="mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-3xl lg:text-5xl text-white pt-6">Scegli il tuo account</h5>
    <div class="flex justify-center flex-wrap">
       @include('.components.component.card-login')
    </div>
  </div>
</div>
@endsection
