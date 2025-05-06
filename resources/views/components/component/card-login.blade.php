@foreach($films as $film){

  <div class="flex flex-col items-center text-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{$film->image}}" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal text-white">
        <h5 class="mb-2 text-2xl font-bold tracking-tight">{{$film->title_film}}</h5>
        <p class="mb-3 font-normal">{{$film->plot}}</p>
    </div>
  </div>



}
