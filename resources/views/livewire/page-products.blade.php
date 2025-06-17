    <div class="container mx-auto mt-12 sm:grid grid-cols-10 gap-6 p-6 min-h-[700px]">

        <div class="w-full xl:col-span-2 col-span-3 bg-[#232B33] p-6 mb-6"> 

            <p class="text-white xl:text-4xl lg:text-4xl md:text-3xl sm:text-2xl text-xl font-bold text-center">Фильтры</p>

            <div class="w-full md:mt-4 mt-2 mb-6">
                {{-- Фильтр категорий --}}
                <div class="mb-2">
                    <div class="text-white lg:text-xl md:text-xl sm:text-lg text-base font-medium">Категории:</div>
                    @foreach ($categories as $category)
                        <div>
                            <label wire:key="{{ $category->id }}" for="{{ $category->slug }}">
                                <input class="accent-sky-600" wire:model.live="selected_categories" type="checkbox" id="{{ $category->slug }}" value="{{ $category->id }}">
                                <span class=" text-gray-700 dark:text-gray-400 lg:text-xl md:text-lg sm:text-lg text-base font-light" >{{ $category->name }}</span>
                            </label>
                        </div>
                    @endforeach
                </div>
                {{-- Фильтр по брендам --}}
                <div class="mb-2">
                    <div class="text-white lg:text-xl md:text-xl sm:text-lg text-base font-medium">Мастера:</div>
                    @foreach ($brands as $brand)
                    <div>
                        <label for="{{ $brand->slug }}">
                            <input class="accent-sky-600" wire:model.live="selected_brands" type="checkbox" id="{{ $brand->slug }}" value="{{ $brand->id }}">
                            <span class=" text-gray-700 dark:text-gray-400 lg:text-xl md:text-lg sm:text-lg text-base font-light">{{ $brand->name }}</span>
                            <span class=" text-gray-700 dark:text-gray-400 lg:text-xl md:text-lg sm:text-lg text-base font-light">{{ $brand->speciality }}</span>
                        </label>
                    </div>
                    @endforeach
                </div>
                {{-- Фильтр по популярности --}}
                <div class="mb-2">
                    <div class="text-white lg:text-xl md:text-xl sm:text-lg text-base font-medium">Популярный:</div>
                    <label for="is_featured">
                        <input class="accent-sky-600" wire:model.live="featured" type="checkbox" id="is_featured" value="1">
                        <span class=" text-gray-700 dark:text-gray-400 lg:text-xl md:text-lg sm:text-lg text-base font-light">Да</span>
                    </label>
                </div>
                 {{-- Фильтр по акциям --}}
                 <div class="mb-2">
                    <div class="text-white lg:text-xl md:text-xl sm:text-lg text-base font-medium">Скидка:</div>
                    <label for="is_sale">
                        <input class="accent-sky-600" wire:model.live="sale" type="checkbox" id="is_sale" value="1">
                        <span class=" text-gray-700 dark:text-gray-400 lg:text-xl md:text-lg sm:text-lg text-base font-light">Да</span>
                    </label>
                </div>
                {{-- Фильтр по цене --}}
                {{-- <div class="mb-2">
                    <div class="text-lg font-semibold uppercase text-white">Цена</div>
                    <label for="">
                        <input class="accent" wire:model.live="price_range" type="range" max="530000" value="12000" step="30000" id="" value="0">
                        <span>{{ Number::currency($price_range, 'RUB') }}</span>
                    </label>
                </div> --}}
                {{-- сортировка --}}
                {{-- <div class="mb-2">
                    <div class="mb-2 text-lg font-semibold uppercase text-white">Сортировать по</div>
                    <select class="mb-2" wire:model.live="sort" name="" id="">
                        <option value="latest">Сначала новые</option>
                        <option value="price">Сначала недорогие</option>
                    </select>
                </div> --}}
        
            </div>

            <button wire:click="resetFilters" class="w-full px-4 py-2  bg-[#228BEF] hover:bg-[#1C2025] hover:text-[#228BEF] hover:border-[#228BEF] hover:border border-[#228BEF] border text-center">Сбросить фильтры</button>

        </div>

        <div class="Services cards-pop w-full xl:col-span-8 col-span-7">
                
                <div class="text">
                    <h2 class="text-white   lg:text-5xl md:text-5xl sm:text-4xl text-3xl font-bold">Наши услуги</h2>
                    <p class="text-gray-400 lg:text-2xl md:text-xl  sm:text-lg  text-base font-light mt-2">За нашими плечами сотни обслуженных автомобилей.</p>
                </div>

                <x-product.product-group :products="$products" />

                {{-- Вывод пагинации --}}
                {{ $products->links() }}
        </div>
    </div>