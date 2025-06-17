<main>

    <div class="container mx-auto">
          <div class="bg-[#232B33] mt-24 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

                <div class="col-span-1">
                    
                    <div class="p-4">
                        <img class="" src="{{ url('storage', $product->images[0]) }}" alt="">
                    </div>
                    
                    <div class="px-6 pb-4">
                        <div>
                            <h5 class="text-white lg:text-3xl md:text-5xl sm:text-4xl text-3xl font-bold">{{ $product->name }}</h5>
                            <p class="xl:text-xl lg:text-lg md:text-xl sm:text-2xl text-xl font-normal text-white mt-4">Категория: {{ $product->category->name }}</p>
                            <p class="xl:text-xl lg:text-lg md:text-xl sm:text-2xl text-xl font-normal text-white">Имя мастера: {{ $product->brand->name }}</p>
                            <p class="xl:text-xl lg:text-lg md:text-xl sm:text-2xl text-xl font-normal text-white">Cпециальность мастера: {{ $product->brand->speciality }}</p>
                        </div>               
                        
                        <p class="xl:text-xl lg:text-lg md:text-xl sm:text-2xl text-xl font-bold text-[#228BEF] mt-4">Цена: {{ $product->price }} руб</p>
                        
                    </div>

                </div>

                <div class="col-span-1 lg:col-span-2 p-6">
                    <p class="text-white lg:text-5xl md:text-5xl sm:text-4xl text-3xl font-bold mb-4">Описание</p>
                    <p class="text-white lg:text-2xl md:text-xl sm:text-lg text-base font-light">{{ $product->description }}</p>
                </div>
            
            </div>      
    </div>

</main> 