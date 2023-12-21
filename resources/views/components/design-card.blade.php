@props(['design'])

<x-card class="w-full">
    <a href="pages/show/{{$design->id}}">
        <div class="relative bg-white rounded-2xl overflow-hidden shadow-md py-t-4">
            <img
                class="w-full h-60 object-cover rounded-t-2xl"
                src="{{$design->image ? asset('storage/'.$design->image) : asset('/images/tailor.png')}}"
                alt="Design Image"
            />
            <div class="absolute top-0 left-0 right-0 flex justify-between items-center p-2 bg-gray-100 rounded-t-2xl">
                <a href="/"><i class="fas fa-share text-black-400"></i></a>
                <a href="/"> <i class="fas fa-heart text-white-400"></i></a>
                <a href="/"><button class="flex bg-btn rounded border-none">Customize</button></a>
                <a href="/"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
        <div class="flex flex-col flex-wrap justify-center gap-2 px-3 py-4 border-gray-200">
            <h3 class="text-lg font-semibold">
                Designer: <span class="italic">{{$design->title}}</span>
            </h3>
            <div class="text-md font-bold">Style: {{$design->style}}</div>
            <div class="text-md font-bold">Material: {{$design->material}}</div>
            <div class="text-md">{{$design->description}}</div>
            <div class="text-md font-bold">Color: {{$design->color}}</div>
            <x-design-tags :tagsCsv="$design->tags" class="flex flex-wrap gap-2" />
            <div class="text-md font-bold text-gray-600">
                Price with Material: #{{$design->price}}
            </div>
        </div>
    </a>
</x-card>
