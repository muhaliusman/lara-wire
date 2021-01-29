@props(['item'])
@foreach ($item->children as $child)
	@if (url($child->url) === url()->current())
		<x-utils.menu-active />
	@endif
@endforeach
<li class="relative px-6 py-3">
	<button
		class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
		aria-haspopup="true"
		@click="toggleSideDropdown('{{ $item->name }}')"
	>
		<span class="inline-flex items-center">
			<i class="w-5 h-5" data-feather="{{ $item->icon }}"></i>
			<span class="ml-4">{{ $item->name }}</span>
		</span>
		<svg
			class="w-4 h-4"
			aria-hidden="true"
			fill="currentColor"
			viewBox="0 0 20 20"
		>
			<path
				fill-rule="evenodd"
				d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
				clip-rule="evenodd"
			></path>
		</svg>
	</button>
	<ul
		class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50"
		aria-label="submenu"
		x-show.transition="sideDropdown === '{{ $item->name }}'"
		x-show="sideDropdown === '{{ $item->name }}'"
		x-cloak
	>
		@foreach ($item->children as $child)
			<li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800">
				<a
					class="w-full cursor-pointer"
					@if (!$child->livewire_component) href="{{ $child->url }}" @else wire:click="$emit('changeComponent', '{{ $child->livewire_component }}')" @endif
					x-on:click="pushStateUrl('{{ $child->url }}')"
				>
					{{ $child->name }}
				</a>
			</li>
		@endforeach
	</ul>
</li>