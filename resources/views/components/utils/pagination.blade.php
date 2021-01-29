<div>
	@if ($paginator->hasPages())
		<nav
			role="navigation"
			aria-label="Pagination Navigation"
			class="flex items-center justify-between"
		>
			<div class="sm:flex-1 sm:flex sm:items-center sm:justify-between">
				<div>
					<p class="text-xs text-gray-700 leading-5">
						<span>{!! __('Showing') !!}</span>
						<span class="font-medium">{{ $paginator->firstItem() }}</span>
						<span>{!! __('to') !!}</span>
						<span class="font-medium">{{ $paginator->lastItem() }}</span>
						<span>{!! __('of') !!}</span>
						<span class="font-medium">{{ $paginator->total() }}</span>
						<span>{!! __('results') !!}</span>
					</p>
				</div>

				<div>
					<nav aria-label="Table navigation">
						<ul class="inline-flex items-center">
							<li>
								<button
									class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-blue @if ($paginator->onFirstPage()) disabled:opacity-50 @endif"
									aria-label="Previous"
									rel="prev"
									wire:click="previousPage"
									dusk="previousPage.after"
									@if($paginator->onFirstPage()) disabled @endif
								>
									<svg
										class="w-4 h-4 fill-current"
										aria-hidden="true"
										viewBox="0 0 20 20"
									>
										<path
											d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
											clip-rule="evenodd"
											fill-rule="evenodd"
										></path>
									</svg>
								</button>
							</li>
							@foreach ($elements as $element)
								@foreach ($element as $page => $url)
									@if ($paginator->currentPage() > 4 && $page === 2)
										<li>
											<span class="px-3 py-1">...</span>
										</li>
									@endif
									@if ($page == $paginator->currentPage())
										<li wire:key="paginator-page-{{ $page }}">
											<button class="px-3 py-1 text-white transition-colors duration-150 bg-blue-600 border border-r-0 border-blue-600 rounded-md focus:outline-none focus:shadow-outline-blue">
													{{ $page }}
											</button>
										</li>
									@elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 ||
										$page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2 || $page ===
										$paginator->lastPage() || $page === 1)
										<li wire:key="paginator-page-{{ $page }}">
											<button
												class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-blue"
												wire:click="gotoPage({{ $page }})"
											>
												{{ $page }}
											</button>
										</li>
									@endif
									@if ($paginator->currentPage() < $paginator->lastPage() - 3 && $page === $paginator->lastPage()
											- 1)
										<li>
											<span class="px-3 py-1">...</span>
										</li>
									@endif
								@endforeach
							@endforeach
							<li>
								<button
									class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-blue @if ($paginator->hasMorePages()) disabled:opacity-50 @endif"
									wire:click="nextPage"
									aria-label="Next"
									dusk="nextPage.after"
									@if(!$paginator->hasMorePages()) disabled @endif
								>
									<svg
										class="w-4 h-4 fill-current"
										aria-hidden="true"
										viewBox="0 0 20 20"
									>
										<path
											d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
											clip-rule="evenodd"
											fill-rule="evenodd"
										></path>
									</svg>
								</button>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</nav>
	@endif
</div>
