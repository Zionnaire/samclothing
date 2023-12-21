<x-layout>
    {{-- <x-card class="p-10 max-w-lg mx-auto mt-24"> --}}
     <div class="w-full flex flex-col">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit a Gig
            </h2>
            <p class="mb-4">Edit: {{$design->title}}</p>
        </header>
    @if ($errors->any())
    <div class="w-full mt-8">
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Oops!</strong>
            <span class="block sm:inline">{{ $errors->first() }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www
                // w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1 0.707 1.708l-7.293 7.293a1.2 1.2 0 0 1-1.697-1.697l7.293-7.293a1.2 1.2 0 0 1 1.697 0z" /><path d="M2.93 13.293a1.2 1.2 0 0 1 1.697 0L10 14.586l7.293-7.293a1.2 1.2 0 1 1 1.697 1.697L10 15.414l-7.293 7.293a1.2 1.2 0 0 1-1.697-1.697z" /></svg>  
                </span>
                </div>
                    @endif
 
         <div class="w-4/5 mt-6 flex flex-col justify-center mx-auto border-2 shadow-lg rounded-md p-10">
    
         <form method="POST" class="space-y-4" enctype="multipart/form-data">
             @csrf
             @method('POST')
             <div class="mb-6">
                 <label
                     for="title"
                     class="inline-block text-lg mb-2"
                     value="{{$design->title}}">Designer's Name</label
                 >
                 <input
                     type="text"
                     class="border border-gray-200 rounded p-2 w-full"
                     name="title"
                     placeholder="Full Name"
                     value="{{$design->title}}"
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
                     value="{{$design->style}}"
                 />
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
                     value="{{$design->tags}}"
                 />
                 @error('tags')
                 <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                 @enderror
             </div>           
 
             <div class="mb-6">
                 <label class="inline-block text-lg mb-2">Color</label>
                 <div class="flex gap-2">
                     @foreach(['Red', 'Blue', 'Green', 'Yellow', 'Black', 'Grey', 'White'] as $color)
                         <label class="flex items-center">
                             <input type="radio" name="color" value="{{ $color }}" {{$design->color === $color ? 'checked' : '' }}>
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
                 <input type="text" class="border border-gray-200 rounded p-2 w-full" name="category" placeholder="Category" value="{{$design->category}}" />
                 @error('category')
                 <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                 @enderror
             </div>
         
             <div class="mb-6">
                 <label for="material" class="inline-block text-lg mb-2">Material</label>
                 <input type="text" class="border border-gray-200 rounded p-2 w-full" name="material" placeholder="Example: Italian" value="{{$design->material}}" />
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
                     value="{{$design->price}}"
                 />
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
                     src="{{$design->image ? asset('storage/'.$design->image) : asset('/images/tailor.jpg')}}"
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
                 >{{$design->description}}</textarea>
                 @error('description')
                 <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                 @enderror
             </div>
 
             <div class="mb-6">
                 <button
                     class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                 >
                      Save Changes
                 </button>
 
                 <a href="/admins/dashboard" class="text-black ml-4"> Back </a>
             </div>
         </form>
         </div>
     </div>
 
    {{-- </x-card> --}}
     </x-layout>
 