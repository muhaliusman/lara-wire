@props(['label'])
<p class="mt-4">
    <a
        class="text-sm font-medium text-brown-600 cursor-pointer hover:underline"
        {{ $attributes }}
    >
        {{ $label }}
    </a>
</p>