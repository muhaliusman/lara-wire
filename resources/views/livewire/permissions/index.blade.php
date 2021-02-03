<div class="container px-6 mx-auto grid">
	<x-title.main-page :title="$title" />
	<div class="w-full flex justify-end pb-4">
		<x-button.primary
			:label="'Add Permission'"
			wire:click="$emit('changeComponent', 'permissions.create')"
			x-on:click="pushStateUrl('permissions.create')"
		/>
	</div>
	<x-table.default>
		<x-slot name="header">
			<tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
				<th class="px-4 py-3">Name</th>
				<th class="px-4 py-3">Guard</th>
				<th class="px-4 py-3">Created At</th>
				<th class="px-4 py-3">Actions</th>
			</tr>
		</x-slot>
		<x-slot name="body">
			@foreach ($permissions as $permission)
			<tr class="text-gray-700 dark:text-gray-400">
				<td class="px-4 py-3">
					{{ $permission->name }}
				</td>
				<td class="px-4 py-3 text-sm">
					{{ $permission->guard_name }}
				</td>
				<td class="px-4 py-3 text-sm">
					{{ $permission->created_at }}
				</td>
				<td class="px-4 py-3">
					<div class="flex items-center text-sm">
						<button
							class="flex items-center justify-between px-2 py-2 font-medium leading-5 text-yellow-400 rounded-lg focus:outline-none focus:shadow-outline-gray"
							aria-label="Edit"
						>
							<i class="fas fa-edit"></i>
						</button>
						<button
							class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg focus:outline-none focus:shadow-outline-gray"
							aria-label="Delete"
							@click="openModal('modalDelete')"
						>
							<i class="fas fa-trash"></i>
						</button>
					</div>
				</td>
			</tr>
		@endforeach
		</x-slot>
		<x-slot name="pagination">{{ $permissions->links() }}</x-slot>
	</x-table.default>
	<x-modal.modal-delete id="modalDelete" x-show="isModalOpen == 'modalDelete'">
		<x-slot name="title">Delete Confirmation</x-slot>
		<x-slot name="body">
			<p class="text-sm text-gray-700 dark:text-gray-400">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum et
                eligendi repudiandae voluptatem tempore!
            </p>
		</x-slot>
	</x-modal.modal-delete>
</div>