<div id="list" class="card flex flex-col  items-center w-full min-w-[300px] transition-all duration-200 hover:scale-105 shadow-sm shadow-blue-200  overflow-hidden pb-5 rounded-3xl">
    
    @if (Request::is('cars'))
        
        <a href="/cars/{{ $car->id }}" class=" flex flex-col justify-between items-center h-full">
            <img src="{{ $car->image_url }}" alt="" class="">

            <div class="flex flex-col justify-center items-center h-full">
                <h3 class=" mt-5 text-3xl">{{ $car->name }}</h3>
                <h3 class="mt-2 text-lg">{{ $car->price }}$</h3>
                <p class=" text-center mt-5 m-4">{{ $car->description }}</p>

            </div>

            
        </a>

    @elseif (Request::is('parts'))

    <a href="/parts/{{ $part->id }}" class=" flex flex-col justify-between items-center h-full">
        <img src="{{ $part->image }}" alt="" class="">

        <div class="flex flex-col justify-center items-center h-full">
            <h3 class=" mt-5 text-3xl">{{ $part->carname }}</h3>
            <h3 class="mt-2 text-lg">{{ $part->size }}</h3>
            <p class=" text-center">{{ $part->color }}</p>
            <p class=" text-center mt-5 m-4">{{ $part->description }}</p>
            

        </div>

        
    </a>

    @endif

    
        
    
</div>