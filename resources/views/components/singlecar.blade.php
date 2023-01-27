<section class="w-full flex my-20">
    <div class=" w-full max-w-7xl flex mx-auto shadow-sm shadow-blue-200 rounded-3xl">
        <div class=" w-1/2 rounded-3xl overflow-hidden">
            <img src="{{ $car->image_url }}" alt="">
        </div>
        <div class=" w-1/2 flex flex-col justify-center pl-10 p-10 gap-4">
            <h1 class=" text-3xl font-bold">{{ $car->name }}</h1>
            <p>{{ $car->description }}</p>
            <h3 class=" text-2xl">{{ $car->price }}$</h3>

            <div>
                <input class=" text-black rounded-lg  p-4 text-xl w-20" type="number" value="1" min="1" max="5"> 
                <button class=" ml-5 border-blue-300  px-6 py-3 border rounded-lg  mr-auto text-xl mt-5 ease-in-out duration-200 hover:shadow-blue-300 shadow-lg">
                    Add To Cart
                </button>
            </div>
            
        </div>
    </div>
</section>