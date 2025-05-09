@foreach ($films as $film)
<a href="{{ route('film.show', $film->id) }}">
  <img class="h-[150px] w-[150px] m-4 object-cover hover:scale-125 transition-transform duration-300 " src="{{asset('storage/'. $film->image)}}" alt="image-film" />
</a>
@endforeach

