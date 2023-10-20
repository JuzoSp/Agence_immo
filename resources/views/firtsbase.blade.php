<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @layer demo {
            button {
                all: unset;
            }
        }
    </style>
</head>

<body>

    @php
        $routeName = request()
            ->route()
            ->getName();
    @endphp

    <nav class="navbar bg-cyan-500  w-full text-white">
        <div class="container-fluid flex flex-row justify-center items-center">
            <a class="text-xl text-white" style="text-decoration: none;" href="/">Laravel</a>
            <div class="flex">
                <ul class="flex flex-row justify-center items-center space-x-2">
                    <li class="nav-item text-white">
                        <a @class(['nav-link', 'active' => str_starts_with($routeName, 'blog.')]) aria-current="page" href="{{ route('blog.index') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('blog.create') }}">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        @if (session('success'))
            <div class="alert alert-success mb-2">
                {{ session('success') }}
            </div>
        @endif

        {{-- @dump(
            request()->route()->getName()
        ) --}}
        @yield('content')

    </div>
</body>

</html>
