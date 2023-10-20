<div class="max-w-sm overflow-hidden rounded-xl bg-white shadow-md duration-200 hover:scale-105 hover:shadow-xl">
    <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bW9kZXJuJTIwaG91c2V8ZW58MHx8MHx8&w=1000&q=80"
        alt="Property Image" class="h-[160px] w-full" />
    <h5 class="card-title flex justify-center items-center">
        <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}"
            style="text-decoration: none" class="py-2">{{ $property->title }}</a>
    </h5>
    <div class="flex flex-col justify-center items-center p-2">
        <div class="flex flex-1 items-center gap-2 m-2">
            <p class="text-sm">{{ $property->surface }}m² - {{ $property->city }} ({{ $property->postal_code }})</p>
            <div class="text-lg font-bold text-green-600">
                {{ number_format($property->price, thousands_separator: ' ') }} Ar
            </div>
        </div>
        <p class="flex justify-center items-center text-sm m-4 text-gray-700">
            {{ $property->description }}
        </p>
        <button
            class="w-[120px] h-[32px] rounded-md bg-indigo-600 text-indigo-100 hover:bg-indigo-500 hover:shadow-md duration-75">See
            More</button>
    </div>
</div>
