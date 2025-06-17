@props(['product'])

<div class="max-w-lg bg-[#232B33] w-full h-full">
            
    <div class="flex justify-center items-center p-6">
        <img class="h-[200px] lg:h-[300px] w-full object-cover" src="{{ url('storage', $product->images[0]) }}" alt="">
    </div>
    <div class="px-6 w-full">
        <div class="h-[60px]">
            <h5 class="xl:text-xl lg:text-lg md:text-xl sm:text-3xl text-2xl font-bold tracking-tight text-white">{{ $product->name }}</h5>
            {{-- <p class="xl:text-lg lg:text-lg md:text-xl sm:text-2xl text-xl font-normal text-white mb-4">Категория: {{ $product->category->name }}</p> --}}
        </div>

        <p class="xl:text-lg lg:text-lg md:text-lg sm:text-2xl text-xl font-normal text-white">Краткое описание:</p>

        <div class="">
            <p class="xl:text-lg lg:text-lg md:text-sm sm:text-2xl text-xl font-normal text-gray-700 dark:text-gray-400">{{ $product['sub-title'] }}</p>
    
            <p class="xl:text-lg lg:text-lg md:text-sm sm:text-2xl text-xl font-normal text-gray-700 dark:text-gray-400">{{ $product['sub-title-two'] }}</p>

            <p class="xl:text-lg lg:text-lg md:text-sm sm:text-2xl text-xl font-normal text-gray-700 dark:text-gray-400">{{ $product['sub-title-thre'] }}</p>
        </div>

        <div class="pb-6">
            <p class="xl:text-lg lg:text-lg md:text-lg sm:text-2xl text-xl font-bold text-[#228BEF] mt-2 mb-4">{{ $product->price }} руб</p>

            <a href="{{ route('single.product', $product->slug) }}">
                <button class="w-full bg-[#228BEF] hover:bg-[#1C2025] hover:text-[#228BEF] hover:border-[#228BEF] hover:border border-[#228BEF] border xl:text-xl lg:text-lg md:text-xl sm:text-3xl text-2xl font-bold tracking-tight text-white py-2 px-8 rounded transition delay-50">
                    Подробнее                
                </button>
            </a>      
        </div>
              
    </div>
</div>