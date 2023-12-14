<x-layout>
    @include('partials._hero')

@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@unless(count($designs) == 0)

@foreach($designs as $design)
<x-design-card :design="$design" /> 
@endforeach


@else 
<p>No designs found</p>
@endunless

</div>

<div class="mt-4 px-4">
    {{$designs->links()}}
</div>
</x-layout>