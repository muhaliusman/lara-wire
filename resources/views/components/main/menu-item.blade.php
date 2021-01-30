@props(['item'])
<li class="relative px-6 py-3">
	<x-other.menu-active
		x-show.transition="menuActive === '{{ $item->livewire_component }}'"
		x-show="menuActive === '{{ $item->livewire_component }}'"
		x-cloak
	/>
	<a
		class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 cursor-pointer"
		wire:click.prevent="$emit('changeComponent', '{{ $item->livewire_component }}')"
		x-on:click="pushStateUrl('{{ $item->livewire_component }}')"
	>
		@if ($item->icon) <i class="{{ $item->icon }}"></i> @endif
		<span class="ml-4">{{ $item->name }}</span>
	</a>
</li>