<!DOCTYPE html>
<html x-data="data" lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Lara Hati</title>
	<link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

	<livewire:styles/>
	<livewire:scripts/>
	{{-- <script src="{{ asset('js/turbolink.js') }}"></script> --}}
</head>
<body>
	<div
		class="flex h-screen bg-gray-50"
		:class="{ 'overflow-hidden': isSideMenuOpen }"
	>
		<livewire:base.sidebar-component />

		<div class="flex flex-col flex-1">
			<x-common.header />
			{{ $slot }}
		</div>
	</div>
	@stack('modals')

    <script src="{{ asset('js/alpine.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
