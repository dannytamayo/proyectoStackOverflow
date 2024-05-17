<x-app-layout>

    <div class="container mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 my-10 flex-col">
        <h2 class="font-bold text-4xl dark:text-gray-800 text-center mb-6">Categoria: {{ $tag->name }}</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($tag->questions as $question)
                <x-question-card :question="$question" />
            @endforeach

        </div>


    </div>

</x-app-layout>
