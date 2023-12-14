@props(['design'])

<x-card>

    
        <div class="w-1/3 flex flex-col items-center gap-0">
            <div class="relative mr-6 md:block rounded-t-2x1 border-b-2 border-gray-200 bg-gray-100">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$design->image ? asset('storage/'.$design->image) : asset('/images/tailor.png')}}"
            alt=""
        />
        <div class="absolute flex items-center gap-2">
            <a href="/"><i class="fas fa-cart text-yellow-400"></i></a>
            <a href="/"><button class="flex bg-btn rounded border-none">customize</button></a>
           <a href="/"> <i class="fas fa-heart text-red-400"></i></a>
            </div>
            </div>
        <div class="flex flex-col gap-2 rounded-b-2xl border-b-2 border-gray-200">
            <h3 class="text-2xl">
                <a href="pages/{{$design->id}}">{{$design->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$design->description}}</div>
           <x-design-tags :tagsCsv="$design->tags"/>
            <div class="text-lg mt-4">
                Price with Material: ${{$design->price}}
            </div>
        </div>
    </div>
</x-card>