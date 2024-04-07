<x-layout heading="Dashboard">

    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Products</h2>
        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
            <x-product-item name="Earthen Bottle" price="48" />
            <x-product-item name="Mechanical Pencil" price="2" />
            <x-product-item name="Water Bottle" price="5" />
        </div>
    </div>

</x-layout>
