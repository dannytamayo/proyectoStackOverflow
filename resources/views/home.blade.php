<x-app-layout>

<div class="container mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 my-10 flex-col">

        @auth
            <div class="w-100 mb-10">
                <a href="{{ route('questions.index') }}"
                    class="bg-gray-600 hover:bg-gray-400 text-white font-bold py-2 px-4 border-b-4 border-gray-800 hover:border-gray-500 rounded">
                    Publicar
                </a>
            </div>
        @endauth

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($questions as $question)
                <x-question-card :question="$question"/>
            @endforeach
        </div>

        {{-- <x-test-nico/> --}}

        {{-- @livewire('test') --}}
        
        

    </div>
</x-app-layout>

<x-app-test>

</x-app-test>
