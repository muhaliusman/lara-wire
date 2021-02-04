@props(['type', 'label'])

<button
    type="{{ $type }}"
    class="w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg sm:px-4 sm:py-2 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
    {{ $attributes }}
>
    {{ $label }}
</button>