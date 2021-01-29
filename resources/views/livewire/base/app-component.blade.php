<main class="h-full pb-16 overflow-y-auto relative">
	<div class="h-full absolute bottom-0 w-full pt-48 text-center bg-opacity-5 bg-blue-600" wire:loading>
		<span class="uppercase font-medium">Processing</span>
	</div>
	@livewire($component, [], key(uniqid()))
</main>