@props(['menu', 'type'])

<aside
	@if ($type === 'dekstop')
	class="z-20 flex-shrink-0 hidden w-64 overflow-y-auto bg-white md:block shadow-md"
	@elseif ($type === 'mobile')
	class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white md:hidden"
	x-show="isSideMenuOpen"
	x-transition:enter="transition ease-in-out duration-150"
	x-transition:enter-start="opacity-0 transform -translate-x-20"
	x-transition:enter-end="opacity-100"
	x-transition:leave="transition ease-in-out duration-150"
	x-transition:leave-start="opacity-100"
	x-transition:leave-end="opacity-0 transform -translate-x-20"
	@click.away="closeSideMenu"
	@keydown.escape="closeSideMenu"
	@endif
>
	<div class="py-4 text-gray-500">
		<x-title.sidebar />
		<ul class="mt-6">
			@foreach ($menu as $index => $item)
				@if ($item->children->count())
				<x-main.menu-item-children :item="$item" />
				@elseif (!$item->children->count() && !$item->parent)
				<x-main.menu-item :item="$item" />
				@endif
			@endforeach
		</ul>
		<div class="px-6 my-6">
			<button class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
				Logout
				<i class="fas fa-sign-out-alt"></i>
			</button>
		</div>
	</div>
</aside>