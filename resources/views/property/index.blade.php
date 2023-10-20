@extends('base')
@section('title', 'Tous nos biens')
@section('content')
    <div class=" bg-gray-50 p-5 mb-5 text-center">
        <form action="" method="get" class="container d-flex gap-2">
            <input class="form-control" type="number" name="surface" placeholder="Surface min:"
                value="{{ $input['surface'] ?? '' }}">
            <input class="form-control" type="number" name="rooms" placeholder="Nombre de pièce min:"
                value="{{ $input['rooms'] ?? '' }}">
            <input class="form-control" type="number" name="price" placeholder="budget max:"
                value="{{ $input['price'] ?? '' }}">
            <input type="text" name="title" placeholder="Mot clés" class="form-control"
                value="{{ $input['title'] ?? '' }}">
            <button class="bg-blue-500 rounded-md py-2 px-2 text-white">Rechercher</button>
        </form>
    </div>
    <div class="container mt-5">
        <div class="flex flex-row">
            @forelse ($properties as $property)
                <div class="flex flex-col col-span-3 mb-4">
                    @include('property.card')
                </div>
            @empty
                <div class="flex flex-col justify-center">
                    Aucun bien ne correspond à votre recherche
                </div>
            @endforelse
        </div>
        <div class="my-4">
            {{ $properties->links() }}
        </div>
    </div>


@endsection
