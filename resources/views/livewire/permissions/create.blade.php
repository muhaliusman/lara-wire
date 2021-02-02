<div class="container px-6 mx-auto grid">
    <x-title.main-page :title="$title" />
    <div class="px-4 py-3 my-8 bg-white rounded-lg shadow-md mt-6">
		<form wire:submit.prevent="submit">
			<x-form.input-text :type="'text'" :name="'name'" :placeholder="'ex: users.index'" :label="'Permission Name'" />
			<x-form.input-text :type="'text'" :name="'guard_name'" :placeholder="'web / api'" :label="'Guard Name'" />
			<hr class="my-4">
			<div class="text-right">
				<x-button.primary :type="'submit'" :label="'Submit'" />
			</div>
		</form>
	</div>
</div>
