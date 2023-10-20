@extends('admin.layout')

@section('title', 'Tous les biens')

@section('content')
    <div class="flex  justify-between items-center mb-2">
        <h1>@yield('title')</h1>
        <button href="{{ route('admin.property.create') }}" class="button bg-blue-500 rounded-md py-2 px-2 text-white">Ajouter
            un
            bien</button>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Surface</th>
                <th>Prix</th>
                <th>Ville</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($properties as $property)
                <tr>
                    <td>{{ $property->title }}</td>
                    <td>{{ $property->surface }}m²</td>
                    <td>{{ number_format($property->price, thousands_separator: ' ') }}</td>
                    <td>{{ $property->city }}</td>
                    <td>
                        <div class="d-flex gap-2 justify-end">
                            <a href="{{ route('admin.property.edit', $property) }}"
                                class="bg-gray-500 text-white rounded-md py-2 px-2" style="text-decoration: none;">Editer</a>
                            <form action="{{ route('admin.property.destroy', $property) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $properties->links() }}

@endsection
