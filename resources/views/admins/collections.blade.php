<x-layout>
    <div class="container mx-auto my-8">
        <div class="flex justify-between items-center">
            <a href="/admins/dashboard" class="text-black ml-4"> Back </a>
        <h1 class="text-3xl font-bold mb-4">All Collections</h1>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8">
            @foreach($designs as $design)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="{{ $design->image ? asset('storage/'.$design->image) : asset('/images/tailor.png') }}" alt="{{ $design->title }}" class="w-full h-48 object-cover mb-4">

                    <p class="text-lg font-semibold mb-2">{{ $design->title }}</p>
                    {{-- <p class="text-sm text-gray-500 mb-2">Created by: {{ $design->user->name }}</p> --}}
                    <p class="text-sm text-gray-500">Created at: {{ $design->created_at->format('M d, Y') }}</p>

                    <div class="mt-4 flex space-x-2">
                        <a href="{{ route('pages.edit', $design) }}" class="text-blue-500 hover:underline">Edit</a>
                        <form action="/admins/{{$design->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this design?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
