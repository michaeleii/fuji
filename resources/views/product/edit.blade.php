<x-layout title="Edit {{ $product->name }}">
    <form action="/products/{{ $product->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12 px-4">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                        <div class="mt-2">
                            <input value={{ $product->name }} type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('name')
                        <div class="text-red-500 text-xs font-semibold mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                        <div class="mt-2">
                            <input value={{ $product->price }} type="text" name="price" id="last-name" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('price')
                        <div class="text-red-500 text-xs font-semibold mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-full">
                        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <div class="mt-2">
                            <textarea id="description" name="description" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $product->description }}</textarea>
                        </div>
                        @error('description')
                        <div class="text-red-500 text-xs font-semibold mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-full">
                        <label for="image_upload" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Image</label>
                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <img id="preview_image" src="{{ $product->image_url }}" alt="image preview" class="rounded-lg max-w-xs">
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="image_upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500 mx-auto">
                                        <span id="image_upload_label">Change image</span>
                                        <input id="image_upload" name="image_upload" type="file" accept="image/png, image/jpeg, image/webp" class="sr-only">
                                    </label>
                                </div>
                                <p id="image_name" class="text-xs leading-5 text-gray-600">PNG, JPG up to 10MB</p>
                            </div>
                        </div>
                        @error('image_upload')
                        <div class="text-red-500 text-xs font-semibold mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mt-6 flex flex-col sm:flex-row items-center sm:justify-between gap-4 px-2">
                <button form="deleteProductForm" class="rounded-md w-full sm:w-fit bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 cursor-pointer">Delete Product</button>
                <div class="flex flex-col sm:flex-row items-center gap-4 w-full sm:w-fit">
                    <a href="/products/{{ $product->id }}" class="text-center rounded-md w-full sm:w-fit bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 cursor-pointer">Cancel</a>
                    <button type="submit" class="rounded-md w-full sm:w-fit bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update Product</button>
                </div>
            </div>
    </form>
    <form id="deleteProductForm" action="/products/{{ $product->id }}" method="POST">
        @csrf
        @method('DELETE')
    </form>
    <script>
        const imageInput = document.getElementById('image_upload');
        const previewImage = document.getElementById('preview_image');
        const imageName = document.getElementById('image_name');
        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            const imageUrl = URL.createObjectURL(file);
            previewImage.src = imageUrl;
            imageName.innerText = file.name;
        });

    </script>
</x-layout>
