<!DOCTYPE html>
<html x-data="data" lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>{{ env('APP_NAME') }}</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<livewire:styles/>
	<livewire:scripts/>
	<style>
		[x-cloak] { display: none }
	</style>
</head>
<body>
	{{ $slot }}
  	<script src="{{ asset('js/alpine.js') }}" defer></script>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
