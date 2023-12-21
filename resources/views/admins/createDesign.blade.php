   <x-layout>
   {{-- <x-card class="p-10 max-w-lg mx-auto mt-24"> --}}
    <div class="w-full flex flex-col">
        <div class="w-full flex justify-center items-center">
            <img class="shadow-sm w-full" src="{{ asset('images/fashion2.jpg') }}" alt="Design Image" class="logo"/>
        </div>
        <div class="w-full mt-8">
            <h1 class="text-center text-3xl font-bold">Create Design</h1>
        </div>
        <div class="w-full mt-4">
            <p class="text-center text-lg">Upload The Design Details</p>
        </div>

        <div class="w-4/5 mt-6 flex flex-col justify-center mx-auto border-2 shadow-lg rounded-md p-10">
   
        <form method="POST" class="space-y-4" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-6">
                <label
                    for="title"
                    class="inline-block text-lg mb-2"
                    value="{{old("title")}}">Designer's Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title"
                    placeholder="Full Name"
                    value="{{old("title")}}"
                />

                @error('title')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="style"
                    class="inline-block text-lg mb-2"
                >
                    Design Style
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="style"
                    placeholder="Example: Formal, Casual, Long-sleeve, Short-sleeve etc"
                    value="{{old("style")}}" />
                @error('style')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

            </div>
            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2"
                    >Tags (Comma Separated)</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="tags"
                    placeholder="Example: Senator's Wear"
                    value="{{old("tag")}}"/>
                @error('tags')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>           

            <div class="mb-6">
                <label class="inline-block text-lg mb-2">Color</label>
                <div class="flex gap-2">
                    @foreach(['Red', 'Blue', 'Green', 'Yellow', 'Black', 'Grey', 'White'] as $color)
                        <label class="flex items-center">
                            <input type="radio" name="color" value="{{ $color }}" {{ old('color') === $color ? 'checked' : '' }}>
                            <span class="ml-2">{{ $color }}</span>
                        </label>
                    @endforeach
                </div>
                @error('color')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>  

            <div class="mb-6">
                <label for="category" class="inline-block text-lg mb-2">Category</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="category" placeholder="Category" value="{{ old("category") }}" />
                @error('category')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="mb-6">
                <label for="material" class="inline-block text-lg mb-2">Material</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="material" placeholder="Example: Italian" value="{{ old("material") }}" />
                @error('material')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>  
            
            <div class="mb-6">
                <label
                    for="price"
                    class="inline-block text-lg mb-2"
                    >Design Price with Apparel</label
                >
                <input
                    type="number"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="price"
                    placeholder="In Naira: N1,000,000"
                    value="{{old("price")}}"/>
                @error('price')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="image" class="inline-block text-lg mb-2">
                    Design Image
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="image"
                />
                @error('image')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="description"
                    class="inline-block text-lg mb-2"
                >
                    Design Description
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="description"
                    rows="10"
                    placeholder="Write a brief description of the design"
                >{{old("description")}}</textarea>
                @error('description')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Upload Design
                </button>

                <a href="/admins/dashboard" class="text-black ml-4"> Back </a>
            </div>
        </form>
        </div>
    </div>

   {{-- </x-card> --}}
    </x-layout>
