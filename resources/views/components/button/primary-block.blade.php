@props(['type', 'label'])

<button
    type="{{ $type }}"
    class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-brown-600 border border-transparent rounded-lg active:bg-brown-600 hover:bg-brown-700 focus:outline-none focus:shadow-outline-brown"
>
    {{ $label }}
</button>