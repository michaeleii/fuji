   <div class="flex h-16 items-center justify-between">
       <div class="flex items-center">
           <div class="flex-shrink-0 text-white">
               <span class="text-xl font-bold tracking-widest">Fuji</span>


           </div>
           <div class="hidden md:block">
               <div class="ml-10 flex items-baseline space-x-4">
                   <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                   <x-nav-link href="/products/create" :active="request()->is('products/create')">Create</x-nav-link>

               </div>
           </div>
       </div>
       <div class="hidden md:block">
           <div class="ml-4 flex items-center md:ml-6">
               <!-- Profile dropdown -->
               <div class="relative ml-3">
                   <div>
                       <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                           <span class="absolute -inset-1.5"></span>
                           <span class="sr-only">Open user menu</span>
                           <img class="h-8 w-8 rounded-full" src="https://avatars.githubusercontent.com/u/57844588?v=4" alt="">

                       </button>
                   </div>
               </div>
           </div>
       </div>
       <div class="-mr-2 flex md:hidden">
           <!-- Mobile menu button -->
           <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
               <span class="absolute -inset-0.5"></span>
               <span class="sr-only">Open main menu</span>
               <!-- Menu open: "hidden", Menu closed: "block" -->
               <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
               </svg>
               <!-- Menu open: "block", Menu closed: "hidden" -->
               <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
               </svg>
           </button>
       </div>
   </div>
