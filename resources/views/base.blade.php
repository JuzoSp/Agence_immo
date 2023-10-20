<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title') | GoldenKeyProperties </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar bg-gradient-to-r from-gray-500 to-white w-full text-white">
        <div class="w-full flex flex-row justify-start items-center gap-4 px-2">
            <a class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-yellow-100 text-xl font-semibold"
                style="text-decoration: none;" href="/">GoldenKey</a>
            @php
                $route = request()
                    ->route()
                    ->getName();
            @endphp
            <div class="flex flex-row justify-start items-center space-x-8 h-max w-full">
                <div
                    class="text-xl flex justify-center items-center text-white bg-gradient-to-t from-yellow-500 to-yellow-100 rounded-md px-2 py-2">
                    <a href="{{ route('property.index') }}" @class(['nav-link', 'active' => str_contains($route, 'property.')])>
                        Biens
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container w-full">
        @yield('content')
    </div>
</body>

</html>
