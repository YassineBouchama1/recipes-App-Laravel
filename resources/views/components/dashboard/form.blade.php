


<section class=" bg-white rounded-md p-4 ">
    <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
        @csrf()
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div>

                <label class="dark:text-white text-black-200" for="title">Title</label>
                <input id="title" name="title" type="text" value='{{ old('name') }}' class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>



            <div>
                <label class="dark:text-white text-black-200" for="passwordConfirmation">Categories</label>
                <select name="category_id"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    @foreach($categories as $categorie)
                    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                @endforeach

                </select>
            </div>


            <div>

                <label class="dark:text-white text-black-200" for="content">Text Area</label>
                <textarea name="content" id="content" rows="6" type="textarea"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                >{{ old('content') }}</textarea>
            </div>


     <!-- Image Upload Section -->
     <div>
        <label class="block text-sm font-medium text-black">
            Image
        </label>
        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
            <div class="space-y-1 text-center">
                <svg class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="flex text-sm text-gray-600">
                      <!-- File Input with Image Preview -->
                    <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <span class="">Upload a file</span>
                        <input id="image" name="image" type="file" class="sr-only" onchange="previewImage(this)">
                    </label>
                    <p class="pl-1 text-black">or drag and drop</p>
                </div>
                <p class="text-xs text-black">
                    PNG, JPG, GIF up to 10MB
                </p>
                <button type="button" id="hideImage" class="hidden text-red-500">remove</button>
                <img     id="imagePreview" class="hidden max-h-20 mt-2 mx-auto" alt="Preview Image" />
            </div>
        </div>
    </div>

        </div>
        <div class="flex justify-end mt-6">
            <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-gray-600">Save</button>
        </div>
    </form>
</section>


<!-- fun for Image Preview -->
<script>
    const preview = document.getElementById('imagePreview');

   const btnHide = document.getElementById('hideImage')
   // this for remove image that user add
   btnHide.addEventListener('click',function(){
    preview.src = ''
    preview.classList.add('hidden');
   })

    function previewImage(input) {
        btnHide.classList.remove('hidden');

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
