<div class="container px-6 mx-auto grid">
	<x-utils.body-title :title="$title" />
	<div class="w-full flex justify-end pb-4">
		<a class="flex items-center justify-between px-4 py-2 text-xs font-medium text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-md active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue uppercase" >
			<span>Add User</span>
		</a>
	</div>
	<div class="w-full grid grid-cols-2 gap-4 mb-3">
		<div>
			<input
				class="block w-full mt-1 text-sm focus:border-blue-400 focus:outline-none focus:shadow-outline-purple form-input border"
				placeholder="Search"
				wire:model="search"
			/>
		</div>
		<div>
			<label class="block text-sm">
                <select
                	class="border inline-block float-right mt-1 text-sm form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple w-20"
					wire:model="perPage"
				>
				<option>5</option>
                  <option>10</option>
                  <option>20</option>
                  <option>50</option>
				  <option>100</option>
				  <option>300</option>
				</select>
				<span class="text-gray-700 inline-block w-1/3 float-right text-right pt-3 pr-3">
					Show
				</span>
             </label>
		</div>
	</div>
	<div class="w-full overflow-hidden rounded-lg shadow-xs border">
		<div class="w-full overflow-x-auto relative">
			<div
				class="h-full absolute bottom-0 w-full pt-48 text-center bg-opacity-5 bg-gray-600"
				wire:loading wire:target="perPage, gotoPage"
			>
				<span class="uppercase font-medium">Processing</span>
			</div>
			<table class="w-full whitespace-no-wrap">
				<thead>
					<tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
						<th class="px-4 py-3">Name</th>
						<th class="px-4 py-3">Email</th>
						<th class="px-4 py-3">Created At</th>
						<th class="px-4 py-3">Actions</th>
					</tr>
				</thead>
				<tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
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
										<i class="w-4 h-4" data-feather="edit"></i>
									</button>
									<button
										class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg focus:outline-none focus:shadow-outline-gray"
										aria-label="Delete"
									>
										<i class="w-4 h-4" data-feather="trash-2"></i>
									</button>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t bg-gray-50">
			{{ $users->links() }}
		</div>
	</div>
</div>