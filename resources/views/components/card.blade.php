<!-- Card component to display content in a styled box -->
<div {{ $attributes->merge(['class' => 'bg-white border border-gray-300 rounded-md shadow-md p-6']) }}>
    {{ $slot }}
</div>
