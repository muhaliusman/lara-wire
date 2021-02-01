@php
$rootComponent = config('larawire.root_component');
@endphp
<a
	class="h-full block text-center pl-3 pt-2 text-lg font-bold text-gray-800 cursor-pointer"
	wire:click.prevent="$emit('changeComponent', '{{ $rootComponent }}')"
	x-on:click="pushStateUrl('{{ $rootComponent }}')"
>
  <img class="w-36 h-auto" src="{{ asset('images/larawire.png') }}">
</a>