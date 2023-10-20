<form action="" method="post" class="flex flex-col justify-center items-start">
    @csrf
    <div class="flex flex-col justify-center items-start mb-2">
        <label for="title">Title</label>
        <input type="text" name="title"
            class="w-[240px] h-[36px] border-[2px] border-purple-500 rounded-md focus-visible:outline-none text-center"
            value="{{ old('title', $post->title) }}">
        @error('title')
            {{ $message }}
        @enderror
    </div>
    <div class="flex flex-col justify-center items-start mb-2">
        <label for="slug">Slug</label>
        <input type="text" name="slug"
            class="w-[240px] h-[36px] border-[2px] border-purple-500 rounded-md focus-visible:outline-none text-center"
            value="{{ old('slug', $post->slug) }}">
        @error('slug')
            {{ $message }}
        @enderror
    </div>

    <div class="flex flex-col justify-center items-start mb-2">
        <label for="content">Contenu</label>
        <textarea name="content"
            class="w-[240px] border-[2px] border-purple-500 rounded-md focus-visible:outline-none text-center">{{ old('content', $post->content) }}</textarea>
        @error('content')
            {{ $message }}
        @enderror
    </div>
    <button class="w-[100px] text-center text-white bg-blue-500 rounded py-2 px-2">
        @if ($post->id)
            Modifier
        @else
            Créer
        @endif
    </button>
</form>
