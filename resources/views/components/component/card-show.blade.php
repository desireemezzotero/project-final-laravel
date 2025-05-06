
  <div class="flex flex-col items-center text-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-x">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{$film->image}}" alt="">
    <div class="p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">{{$film->title_film}}</h5>

        <div class="flex">
          <p class="mb-3 text-white font-bold mr-3">Trama: </p>
          <p>
           {{$film->plot}}
          </p>
        </div>

        <div class="flex">
          <p class="mb-3 text-white font-bold mr-3">year: </p>
          <p>
           {{$film->year}}
          </p>
        </div>

        <div class="flex">
          <p class="mb-3 text-white font-bold mr-3">Duration: </p>
          <p>
           {{$film->duration}}
          </p>
        </div>

        <div class="flex">
          <p class="mb-3 text-white font-bold mr-3">Genre: </p>
          <p>
           @foreach($film->genres as $genre)
            {{$genre->title_genre}}
           @endforeach
          </p>
        </div>
    </div>
  </div>

