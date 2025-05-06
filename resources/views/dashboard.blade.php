@extends('/layouts/master')

@section('component')
<div class="bg-black min-h-screen">
  <div class="mx-auto container text-center">
    <h5 class="mb-4 text-4xl font-extrabold leading-none tracking-tigh md:text-3xl lg:text-5xl text-white pt-6">Scegli il tuo account</h5>
    <div class="flex justify-items-center justify-center flex-wrap">
      @include('.components.component.card-login')
    </div>
  </div>
</div>
@endsection
