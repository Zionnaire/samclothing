<!-- Card component to display content in a styled box -->
<div {{ $attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6 mx-auto flex flex-col max-w-lg']) }}>
    {{ $slot }}
</div>