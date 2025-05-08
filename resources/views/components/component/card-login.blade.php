@php
    $images=[
      'img/ariel.png',
      'img/bianca.png',
      'img/lili.jpeg',
      'img/paperino.png',
    ]
@endphp

@foreach($images as $image)
<a href="{{ route('user')}}">
  <img class="h-[150px] w-[150px] m-4 object-cover hover:scale-125 transition-transform duration-300 " src="{{$image}}" alt="image-film" />
</a>
@endforeach

