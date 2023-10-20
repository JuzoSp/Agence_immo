<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title') | Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
</head>

<body>

    <nav class="navbar bg-gradient-to-r from-gray-500 to-white w-full text-white">
        <div class="w-full flex flex-row justify-start items-center px-2">
            <a class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-yellow-100 text-xl font-semibold"
                style="text-decoration: none;" href="/">GoldenKey</a>
            @php
                $route = request()
                    ->route()
                    ->getName();
            @endphp
            <div class="w-full flex justify-between items-center gap-3">
                <div class="flex flex-row justify-center items-center h-max ml-4 gap-3">
                    <div
                        class="text-base text-white bg-gradient-to-t from-yellow-500 to-yellow-100 rounded-md px-2 py-2">
                        <a href="{{ route('admin.property.index') }}" @class(['nav-link', 'active' => str_contains($route, 'property.')])>
                            Gérer les biens
                        </a>
                    </div>
                    <div
                        class="text-base text-white bg-gradient-to-t from-yellow-500 to-yellow-100 rounded-md px-2 py-2">
                        <a href="{{ route('admin.option.index') }}" @class(['nav-link', 'active' => str_contains($route, 'option.')])>
                            Gérer les options
                        </a>
                    </div>
                </div>
                <div class="flex justify-end items-center">
                    @auth
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-orange-500 rounded-md px-2 py-2">
                                        Se déconnecter
                                    </button>
                                </form>
                            </li>
                        </ul>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">

        @include('shared.flash')
        @yield('content')
    </div>
</body>

<script>
    new TomSelect('select[multiple]', {
        plugins: {
            remove_button: {
                title: 'Supprimer'
            }
        }
    })
</script>

</html>
