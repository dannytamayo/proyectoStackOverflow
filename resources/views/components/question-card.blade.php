<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transition ease-in-out duration-300">
    <div class="flex flex-wrap">
        <div class="w-full px-6 pt-4 bg-gray-200">
            <h1 class="font-bold text-xl mb-2 truncate">
                <a href="{{route('questions.show', $question)}}" >{{$question->titulo}}</a>
            </h1>
        </div>
    </div>
    <div class="px-6 py-2">
        @foreach ($question->tags as $tag)
        <a style="background-color: {{$tag->color}}" href="{{route('tags.show', $tag)}}" class="inline-block text-white rounded-full px-3 py-1 text-sm mr-2">{{$tag->name}}</a>
        @endforeach
    </div>
</article>

