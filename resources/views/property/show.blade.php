@extends('base')

@section('title', $property->title)
@section('content')

    <div class="container mt-3">
        <h1>{{ $property->title }}</h1>
        <h2>{{ $property->rooms }} pieces - {{ $property->surface }}m²</h2>

        <div class="text-primary fw-bold" style="font-size: 4rem;">
            {{ number_format($property->price, thousands_separator: ' ') }}Ar
        </div>

        <hr>

        <div class="mt-4">
            <h4>Intéressé par ce bien?</h4>

            @include('shared.flash')

            <form action="{{ route('property.contact', $property) }}" method="post" class="vstack gap-3">
                @csrf
                <div class="flex flex-row gap-2">
                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Prénom',
                        'name' => 'firstname',
                    ])
                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Nom',
                        'name' => 'lastname',
                    ])
                </div>
                <div class="flex flex-row gap-2">
                    @include('shared.input', [
                        'type' => 'email',
                        'class' => 'col',
                        'label' => 'Email',
                        'name' => 'email',
                    ])
                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Tél',
                        'name' => 'phone',
                    ])
                </div>
                @include('shared.input', [
                    'type' => 'textarea',
                    'class' => 'col',
                    'label' => 'Votre message',
                    'name' => 'message',
                ])
                <button
                    class="button cursor-pointer hover:bg-blue-600 hover:shadow-md duration-75 text-white w-[150px] flex justify-center items-center bg-blue-500 py-2 px-2 rounded">
                    Nous contacter
                </button>
            </form>

        </div>

        <div class="mt-4">
            <p>{!! nl2br($property->description) !!}</p>
            <div class="flex flex-row">
                <div class="col-8">
                    <h2>Caractéristique</h2>
                    <table class="table table-striped">
                        <tr>
                            <td>Surface habitable</td>
                            <td>{{ $property->surface }}m²</td>
                        </tr>
                        <tr>
                            <td>Pièces</td>
                            <td>{{ $property->rooms }}</td>
                        </tr>
                        <tr>
                            <td>Chambres</td>
                            <td>{{ $property->bedrooms }}</td>
                        </tr>
                        <tr>
                            <td>Etages</td>
                            <td>{{ $property->floor ?: 'Rez de chaussée' }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-4">
                    <h2>Spécificités</h2>
                    <ul class="list-group">
                        @foreach ($property->options as $option)
                            <li class="list-group-item">{{ $option->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
