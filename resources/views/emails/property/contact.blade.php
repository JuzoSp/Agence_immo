<x-mail::message>
    # Nouvelle demande de contact

    Une nouvelle demande de contact a été fait pour le bien <a
        href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">
        {{ $property->title }}</a>.

    -Prénom: {{ $data['firstname'] }}
    -Nom: {{ $data['lastname'] }}
    -Tél: {{ $data['phone'] }}
    -Email: {{ $data['email'] }}

    **Messages:**<br />

    {{ $data['message'] }}
    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
