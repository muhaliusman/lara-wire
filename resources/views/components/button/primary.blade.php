@props(['label'])
<button
    class="items-center justify-between px-4 py-2 text-xs font-medium text-white transition-colors duration-150 bg-brown-600 border border-transparent rounded-md active:bg-brown-600 hover:bg-brown-700 focus:outline-none focus:shadow-outline-brown uppercase"
    {{ $attributes }}
>
    <span>{{ $label }}</span>
</button>