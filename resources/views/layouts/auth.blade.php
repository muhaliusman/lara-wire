<!DOCTYPE html>
<html x-data="data" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <livewire:styles />
    <livewire:scripts />
    <style>
        [x-cloak] {
            display: none
        }

    </style>
</head>

<body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full dark:hidden"
                        src="{{ asset('images/coffee_bg.jpg') }}" alt="Office" />
                </div>
                <div class="flex flex-col flex-1 p-8">
                    <div>
                        <img class="w-36 mb-8 h-auto" src="{{ asset('images/larawire.png') }}">
                    </div>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/alpine.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
