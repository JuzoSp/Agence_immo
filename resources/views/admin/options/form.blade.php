@extends('admin.layout')
@section('title', $option->exists ? 'Editer une option' : 'Créer une option')
@section('content')
    <h1>@yield('title')</h1>
    <form class="vstack gap-2" action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option) }}"
        method="post">
        @csrf
        @method($option->exists ? 'put' : 'post')


        @include('shared.input', [
            'label' => 'Nom',
            'name' => 'name',
            'value' => $option->name,
        ])
        <div>
            <button class="button bg-blue-500 rounded px-2 py-2 text-white">
                @if ($option->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>
    </form>
@endsection
