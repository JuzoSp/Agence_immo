@extends('admin.layout')

@section('title', 'Toutes les options')

@section('content')
    <div class="flex  justify-between items-center mb-2">
        <h1>@yield('title')</h1>
        <button href="{{ route('admin.option.create') }}" class="button bg-blue-500 rounded-md py-2 px-2 text-white">
            Ajouter une option
        </button>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($options as $option)
                <tr>
                    <td>{{ $option->name }}</td>
                    <td>
                        <div class="d-flex gap-2 w-100 justify-end">
                            <a href="{{ route('admin.option.edit', $option) }}"
                                class="bg-gray-500 text-white rounded-md py-2 px-2" style="text-decoration: none;">Editer</a>
                            <form action="{{ route('admin.option.destroy', $option) }}" method="post">
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

    {{ $options->links() }}
@endsection
