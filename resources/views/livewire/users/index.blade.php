<div class="container px-6 mx-auto grid">
	<x-title.main-page :title="$title" />
	<div class="w-full flex justify-end pb-4">
		<x-button.primary
			:label="'Add User'"
			wire:click="$emit('changeComponent', 'users.create')"
			x-on:click="pushStateUrl('users.create')"
		/>
	</div>
	<x-table.default>
		<x-slot name="header">
			<tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
				<th class="px-4 py-3">Name</th>
				<th class="px-4 py-3">Email</th>
				<th class="px-4 py-3">Created At</th>
				<th class="px-4 py-3">Actions</th>
			</tr>
		</x-slot>
		<x-slot name="body">
			@foreach ($users as $user)
			<tr class="text-gray-700 dark:text-gray-400">
				<td class="px-4 py-3">
					<div class="flex items-center text-sm">
						<div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
							<img
								class="object-cover w-full h-full rounded-full"
								src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
								alt=""
								loading="lazy"
							/>
							<div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
						</div>
						<div>
							<p class="font-semibold">{{ $user->name }}</p>
							<p class="text-xs text-gray-600 dark:text-gray-400">
								10x Developer
							</p>
						</div>
					</div>
				</td>
				<td class="px-4 py-3 text-sm">
					{{ $user->email }}
				</td>
				<td class="px-4 py-3 text-sm">
					{{ $user->created_at }}
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
						>
							<i class="fas fa-trash"></i>
						</button>
					</div>
				</td>
			</tr>
		@endforeach
		</x-slot>
		<x-slot name="pagination">{{ $users->links() }}</x-slot>
	</x-table.default>
</div>