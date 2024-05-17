<x-app-layout>

    <div class="container mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-10">
        <h1 class="text-4xl font-extrabold dark:text-gray-800 text-center">CATEGORIAS</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
            @foreach ($tags as $tag)
                <a href="{{ route('tags.show', $tag) }}"
                    class="bg-gray-100 max-w-sm rounded overflow-hidden shadow-lg hover:scale-105 transition ease-in-out duration-300">
                    <img class="w-full h-52" src="{{ Storage::url($tag->img_url) }}" alt="">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $tag->name }}</div>
                        <p class="text-gray-700 text-base line-clamp-3">
                            {{ $tag->descripcion }}
                        </p>
                    </div>

                </a>
            @endforeach
        </div>

        <div class="mt-10 mb-0">
            {{ $tags->links() }}
        </div>

</x-app-layout>
