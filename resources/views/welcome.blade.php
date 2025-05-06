@extends('/layouts/master')

@section('component')
<div class= "bg-black">
  <div class="mx-auto container flex justify-items-center justify-center">
    @include('.components.card-login')
  </div>
</div>
@endsection