@extends('base')

@section('content')
    <div class=" bg-gray-50 p-5 mb-5 text-center">
        <section class="w-full bg-cover bg-center py-32" style="background-image: url('https://source.unsplash.com/random');">
            <div class="container mx-auto text-center text-white">
                <h1 class="inline-flex items-baseline gap-2 text-5xl font-medium mb-6">Bienvenue chez
                    <p class="text-rose-500">
                        GoldenKey Properties
                    </p>
                </h1>
                <p class="text-xl mb-12">Votre partenaire de confiance dans le monde de l'immobilier.</p>
            </div>
        </section>
    </div>

    <div class="container mt-3">
        <h2 class="text-gray-500">Nos derniers biens</h2>
        <div class="flex flex-row justify-center items-center gap-5 mt-2">
            @foreach ($properties as $property)
                <div class="flex flex-col">
                    @include('property.card')
                </div>
            @endforeach
        </div>
    </div>
@endsection
