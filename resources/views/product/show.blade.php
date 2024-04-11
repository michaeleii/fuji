<x-layout title="{{ $product->name }}">
    <div class="bg-white">
        <div class="pt-6">
            <nav aria-label="Breadcrumb">
                <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <li>
                        <div class="flex items-center">
                            <a href="/products" class="mr-2 text-sm font-medium text-gray-900">Products</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>
                    <li class="text-sm">
                        <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">{{ $product->name }}</a>
                    </li>
                </ol>
            </nav>

            <div class="flex gap-6 px-6 flex-wrap">
                <!-- Image gallery -->
                <div class="mt-6 lg:max-w-lg">
                    <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="h-full w-full object-cover object-center">
                    </div>
                </div>

                <!-- Product info -->
                <div class="px-4 pb-16 pt-10">
                    <h1 class="font-bold tracking-tight text-gray-900 text-4xl">{{ $product->name }}</h1>
                    <p class="text-gray-500 my-6 text-xl lg:max-w-[400px]">{{ $product->description }}</p>
                    <h2 class="sr-only">Product information</h2>
                    <p class="text-3xl tracking-tight text-gray-900 font-bold">{{ $product->price }}</p>
                    <button type="submit" class="lg:max-w-[300px] mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add to Cart</button>
                    <a href="/products/{{ $product->id }}/edit" class="lg:max-w-[300px] mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-zinc-600 px-8 py-3 text-base font-medium text-white hover:bg-zinc-700 focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2">Edit Product</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
