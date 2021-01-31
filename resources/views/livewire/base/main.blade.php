<main class="h-full pb-16 overflow-y-auto relative w-full">
	<x-loading.full-page :text="'Loading'" />
	@livewire($component, [], key(uniqid()))
</main>