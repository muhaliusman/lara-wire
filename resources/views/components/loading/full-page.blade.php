@props(['text'])
<div
    class="z-50 h-full absolute bottom-0 w-full pt-48 text-center bg-opacity-5 bg-gray-600"
    wire:loading
    {{ $attributes }}
>
    <span class="uppercase text-sm font-medium bg-brown-500 text-white p-2 rounded-sm">{{ $text }}</span>
</div>