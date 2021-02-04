<div class="container px-6 mx-auto grid">
    <x-title.main-page :title="$title" />
    <div class="px-4 py-3 my-8 bg-white rounded-lg shadow-md mt-6">
		<form wire:submit.prevent="submit">
			<x-form.input-text :type="'text'" :name="'name'" :label="'Permission Name'" placeholder="ex: users.index" />
			<x-form.input-text :type="'text'" :name="'guard_name'" :label="'Guard Name'" placeholder="web / api" />
			<hr class="my-4">
			<div class="text-right">
				<x-button.primary :type="'submit'" :label="'Submit'" />
			</div>
		</form>
	</div>
</div>
