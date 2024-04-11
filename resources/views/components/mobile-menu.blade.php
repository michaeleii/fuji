<div class="md:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <x-nav-link href="/" mobile :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/products/create" mobile :active="request()->is('products/create')">Create</x-nav-link>
    </div>
    <div class="border-t border-gray-700 pb-3 pt-4">
        <div class="flex items-center px-5">
            <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="https://avatars.githubusercontent.com/u/57844588?v=4" alt="">

            </div>
            <div class="ml-3">
                <div class="text-base font-medium leading-none text-white">Michael Lei</div>
                <div class="text-sm font-medium leading-none text-gray-400 mt-2">michaelleie0ca@gmail.com</div>
            </div>
        </div>

    </div>
</div>
