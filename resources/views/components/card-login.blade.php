@php
   $images = [
    'img/ariel.png',
    'img/bianca.png',
    'img/paperino.png', 
    'img/lili.jpeg'
   ]
@endphp

@foreach ($images as $image)
<a href="{{route('login')}}">
  <img class="h-[150px] w-[150px] m-4 object-cover " src="{{ asset($image) }}" alt="" />
</a>
@endforeach

