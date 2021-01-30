<main class="h-full pb-16 overflow-y-auto relative">
	<x-loading.full-page :text="'Loading'" />
	@livewire($component, [], key(uniqid()))
</main>