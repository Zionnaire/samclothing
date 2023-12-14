<x-layout>
    @include('partials._search')
    
    <a href="/" class="inline-block text-black ml-4 mb-4"
                    ><i class="fa-solid fa-arrow-left"></i> Back
                </a>
    
    <div class="mx-4">
    
     <x-card class="p-10">
          
              <div
              class="flex flex-col items-center justify-center text-center shadow-md p-3"
          >
              
              <img
                  class="w-48 mr-6 mb-6"
                  src="{{$design->image ? asset('storage/'.$design->image) : asset('/images/no-image.png')}}"
                  alt=""
              />
    
              <h3 class="text-2xl mb-2">{{$design->title}} </h3>
              
              <div class="text-xl font-bold mb-4">{{$design->style}} </div>
              
              <x-listing-tags :tagsCsv="$design->tags"/>
              
              <div class="border border-gray-200 w-full mb-6"></div>
              
              <div>
                  
                  <h3 class="text-3xl font-bold mb-4">  
                      Design Description
                  </h3>
                  
                  <div class="text-lg space-y-6">
                      
                      {{$design->description}}  
    
                      <a  
                          href="mailto:{{$designer->designer_name}}?subject=Design%20Inquiry"
                          class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                      >
                          <i class="fa-solid fa-envelope"></i>  
                          Contact Designer</a>
                  </div>
              </div>
          </div>
     </x-card>
     
     {{-- <x-card class="p-2 space-x-6 flex mt-4 flex gap-2">
        <a href="/listings/{{$listing->id}}/edit" class="flex gap-2 text-white py-2 rounded-xl hover:opacity-80">
        <i class="fa-solid fa-pen-to-square text-black">Edit</i>
        </a>

        <form action="/listings/{{$listing->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="flex gap-2 text-white py-2 rounded-xl hover:opacity-80">
                <i class="fa-solid fa-trash-can text-black">Delete</i>
                </button>
                </form>
     </x-card> --}}
    </div>
    </x-layout>
    