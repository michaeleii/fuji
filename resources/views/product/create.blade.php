<x-layout title="Create Product">
    <form action="/products" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12 px-4">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                        <div class="mt-2">
                            <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('name')
                        <div class="text-red-500 text-xs font-semibold mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                        <div class="mt-2">
                            <input type="text" name="price" id="last-name" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('price')
                        <div class="text-red-500 text-xs font-semibold mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-full">
                        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <div class="mt-2">
                            <textarea id="description" name="description" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                        @error('description')
                        <div class="text-red-500 text-xs font-semibold mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-full">
                        <label for="image_upload" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Image</label>
                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <img id="preview_image" src="" alt="image preview" class="rounded-lg max-w-xs hidden">
                                <svg id="image_upload_icon" class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="image_upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500 mx-auto">
                                        <span id="image_upload_label">Upload an image</span>
                                        <input id="image_upload" name="image_upload" type="file" accept="image/png, image/jpeg, image/webp" class="sr-only">
                                    </label>
                                </div>
                                <p id="image_name" class="text-xs leading-5 text-gray-600">PNG, JPG, WEBP up to 10MB</p>
                            </div>
                        </div>
                        @error('image_upload')
                        <div class="text-red-500 text-xs font-semibold mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center sm:justify-end gap-x-6 px-2">
                <button type="submit" class="rounded-md w-full sm:w-fit bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Product</button>
            </div>
    </form>
    <script>
        const imageInput = document.getElementById('image_upload');
        const previewImage = document.getElementById('preview_image');
        const imageUploadIcon = document.getElementById('image_upload_icon');
        const imageName = document.getElementById('image_name');
        const imageUploadLabel = document.getElementById('image_upload_label');
        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            const imageUrl = URL.createObjectURL(file);
            previewImage.src = imageUrl;
            previewImage.classList.remove('hidden');
            imageUploadIcon.classList.add('hidden');
            imageName.innerText = file.name;
            imageUploadLabel.innerText = 'Change image';
        });

    </script>

</x-layout>
