<x-layout>
    @include('partials._hero')

@include('partials._search')

<div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4">
    @unless(count($designs) == 0)
        @foreach($designs as $design)
            <x-design-card :design="$design" class="w-full min-w-0" /> 
        @endforeach
    @else 
        <p>No designs found</p>
    @endunless
</div>


<div class="mt-4 px-4">
    {{$designs->links()}}
</div>
{{-- <div class="m-4 px-4 flex flex-col justify-between items-center gap-4"> --}}
@include('partials._sectionone')
{{-- @include('partials.metrics') --}}
</x-layout>