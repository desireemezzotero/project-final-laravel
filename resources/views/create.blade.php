@extends('/layouts/master')

@section('component')
<div class="bg-black min-h-screen flex">
  <div class="mx-auto container">
    <h5 class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight md:text-3xl lg:text-5xl text-white pt-6">Aggiungi un nuovo film</h5>

    <form class="max-w-md mx-auto pt-10 text-white" action="{{route('film.store')}}" method="POST" enctype="multipart/form-data">

      @csrf

      <div class="relative z-0 w-full mb-5 group">
        <input type="Text" name="title_film" id="title_film" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 peer" placeholder=" "required />
  
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
  
      </div>
  
      <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="plot"  id="plot" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0  peer" placeholder=" " required />
  
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Plot</label>
      </div>
  
      <div class="relative z-0 w-full mb-5 group">
        <input type="file" id="image"  name="image" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0  peer" placeholder=" " required />

        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Image URL</label>
      </div>
  
      <div class="relative z-0 w-full mb-5 group">
        <input type="text" id="year"  name="year" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0  peer" placeholder=" " required />
        
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Year</label>
      </div>

      <div class="relative z-0 w-full mb-5 group">
        <input type="text" id="duration"  name="duration" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0  peer" placeholder=" " required />
        
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Duration</label>
      </div>
  

  
      <div class="w-full mb-5">
        <label class="block text-sm text-gray-400 mb-2">Genre</label>
      
        <div class="grid grid-cols-4 gap-4">
          @foreach ($genres as $genre)
            <label for="gen-{{$genre->id}}" class="flex items-center space-x-2 text-white text-sm">
              <input
                name="genre[]"
                id="gen-{{$genre->id}}"
                type="checkbox"
                value="{{$genre->id}}"
                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2"
              >
              <span>{{$genre->title_genre}}</span>
            </label>
          @endforeach
        </div>
      </div>
    
      <div class="text-center pt-4">
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
      </div>
    </form>
   
  </div>
</div>
@endsection
