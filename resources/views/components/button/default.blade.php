@props(['label'])
<button
    class="items-center justify-between px-4 py-2 text-xs font-medium text-gray-700 transition-colors duration-150 border border-gray-300 rounded-md active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray uppercase"
    {{ $attributes }}
>
    <span>{{ $label }}</span>
</button>