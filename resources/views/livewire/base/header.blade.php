<header class="z-10 py-4 bg-white shadow-md">
	<div class="container flex items-center justify-between h-full px-6 mx-auto text-brown-600">
		<button
			class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-brown"
			aria-label="Menu"
			@click="toggleSideMenu"
		>
			<svg
				class="w-6 h-6"
				aria-hidden="true"
				fill="currentColor"
				viewBox="0 0 20 20"
			>
				<path
					fill-rule="evenodd"
					d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
					clip-rule="evenodd"
				></path>
			</svg>
		</button>
		<div class="flex justify-end container">
			<ul class="flex items-center space-x-6">
				<li class="relative">
					<button
						class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
						@click="toggleProfileMenu"
						@keydown.escape="closeProfileMenu"
						aria-label="Account"
						aria-haspopup="true"
					>
						<img
							class="object-cover w-8 h-8 rounded-full"
							src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
							alt=""
							aria-hidden="true"
						/>
					</button>
                    <ul
                        x-show="isProfileMenuOpen"
                        x-show.transition="isProfileMenuOpen"
                        x-cloak
                        @click.away="closeProfileMenu"
                        @keydown.escape="closeProfileMenu"
                        class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md"
                        aria-label="submenu"
                    >
                        <li class="flex">
                            <a
                                class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                href="#"
                            >
                                <i class="fas fa-user"></i>
                                <span class="ml-3">Profile</span>
                            </a>
                        </li>
                        <li class="flex">
                            <a
                                class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                href="#"
                            >
                                <i class="fas fa-cog"></i>
                                <span class="ml-3">Settings</span>
                            </a>
                        </li>
                        <li class="flex">
                            <a
                                class="cursor-pointer inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                wire:click="$emit('logout')"
                            >
                                <i class="fas fa-sign-out-alt"></i>
                                <span class="ml-3">Log out</span>
                            </a>
                        </li>
                    </ul>
				</li>
			</ul>
		</div>
	</div>
</header>