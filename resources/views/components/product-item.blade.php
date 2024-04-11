 <a href="/products/{{ $product->id }}" class="group">
     <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
         <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full sm:h-[300px] object-cover object-center group-hover:scale-110 transition-all">
     </div>
     <h3 class="mt-4 text-sm text-gray-700">{{ $product->name }}</h3>
     <p class="mt-1 text-lg font-bold text-gray-900">{{ $product->price }}</p>
 </a>
