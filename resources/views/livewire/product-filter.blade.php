<div>
    <!-- Select per filtrare -->
    <select wire:model.live="genre">
        <option value="">Tutti i generi</option>
        @foreach ($genres as $genre)
            <option value="{{ $genre->id }}">{{ $genre->title_genre }}</option>
        @endforeach
    </select>

    <!-- Card dei film filtrati -->
    <div class="flex justify-items-center justify-center flex-wrap pt-6">
        @if($films->count() > 0 )  
        @foreach ($films as $film)
            <a href="{{ route('film.show', $film->id) }}">
                <img class="h-[150px] w-[150px] m-4 object-cover hover:scale-125 transition-transform duration-300"
                     src="{{ asset('storage/' . $film->image) }}" alt="image-film" />
            </a>
        @endforeach 
        
        @else
          <p class="text-white"> Nessun film disponibile</p>
        @endif
    </div>
</div>
