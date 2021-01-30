<div class="w-full overflow-y-auto relative">
    <x-loading.full-page :text="'Loading'" />
	@livewire($component, [], key(uniqid()))
</div>
