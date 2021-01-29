@props(['item'])
<li class="relative px-6 py-3">
  @if (url($item->url) === url()->current())
    <x-utils.menu-active />
  @endif
  <a
    class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 cursor-pointer"
    @if (!$item->livewire_component)  @else wire:click.prevent="$emit('changeComponent', '{{ $item->livewire_component }}')" @endif
    x-on:click="pushStateUrl('{{ $item->url }}')"
  >
    @if ($item->icon) <i class="w-5 h-5" data-feather="{{ $item->icon }}"></i> @endif
    <span class="ml-4">{{ $item->name }}</span>
  </a>
</li>