@props(['label', 'name', 'type'])
<label class="block text-sm mt-4">
	<span class="text-gray-700">{{ $label ?? '' }}</span>
	<input
		type="{{ $type }}"
		class="block w-full mt-1 text-sm focus:border-brown-400 focus:outline-none focus:shadow-outline-purple form-input border"
		name="{{ $name }}"
		wire:model="{{ $name }}"
		{{ $attributes }}
	/>
	@error($name)
	<x-notification.validation-error :message="$message" />
	@enderror
</label>