   <x-layout>
   <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <p class="mb-4">Upload The Design Details</p>
        </header>

        <form method="POST" action="/designs" class="space-y-4" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-6">
                <label
                    for="designer_name"
                    class="inline-block text-lg mb-2"
                    value="{{old("designer_name")}}">Designer's Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="designer_name"
                />

                @error('designer_name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2"
                    >Design Title</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title"
                    placeholder="Example: Senior Laravel Developer"
                    value="{{old("title")}}"/>
                @error('title')
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
                    placeholder="Example: Remote, Boston MA, etc"
                    value="{{old("price")}}"/>
                @error('price')
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
                    value="{{old("style")}}" />
                @error('style')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc"
                    value="{{old("tags")}}" />
                    @error('tags')
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
                    placeholder="Include tasks, requirements, salary, etc"
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

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
   </x-card>
    </x-layout>
