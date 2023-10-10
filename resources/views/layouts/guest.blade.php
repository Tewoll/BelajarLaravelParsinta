<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body style="background-color: #101113">
    {{-- <x-navigation-menu /> --}}
    <main class="py-5">
        <div class="container">
            <div class="row align-items-center min-vh-100 justify-content-center">
                <div class="col-md-5">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </main>
</body>

</html>
