@props(['products'])

<div class="flex justify-center container mx-auto">
    <ul class="cards w-full grid justify-items-center xl:grid-cols-3 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 md:mt-8 mt-4">
        @if (!$products->isEmpty())
            @foreach ($products as $product)
                <li class="w-full h-full">
                    <x-product.product-card :product="$product" />
                </li>
            @endforeach
        @else
            <div class="col-span-3 mt-36">
                <p class="text-white lg:text-5xl md:text-5xl sm:text-4xl text-3xl font-bold">Товары не найдены</p>
            </div>
        @endif
    </ul>
</div>