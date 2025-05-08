@extends('/layouts/master')

@section('component')
<div class="bg-black min-h-screen flex">
  <div class="mx-auto container">
    <h5 class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight md:text-3xl lg:text-5xl text-white pt-6">Modifica il film</h5>
    @include('.components.component.edit')
  </div>
</div>
@endsection
