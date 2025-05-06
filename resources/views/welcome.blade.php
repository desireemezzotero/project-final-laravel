@extends('/layouts/master')

@section('component')
<div class="bg-black">
  <div class="mx-auto container flex justify-items-center justify-center">
    @include('.components.card-login')
  </div>

  @foreach ($films as $film)
    <h1 class="text-white">{{ $film->title_film }}</h1>
    <h2 class="text-white">
      @foreach ($film->genres as $genre)
        {{ $genre->title_genre }}
      @endforeach
    </h2>
  @endforeach
</div>
@endsection
