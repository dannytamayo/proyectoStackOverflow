<div class="container mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-10 ">

    <h1 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-gray-400 to-purple-400">
        {{ $question->titulo }}</h1>

    <span>{{ $question->user->name }}</span>

    <hr class="my-6 mx-auto w-100% h-1 bg-gray-100 rounded border-0 md:my-8 dark:bg-purple-400">

    <div class="text-lg text-gray-500 mb-2 border-r-4 border-l-4 p-4 border-gray-400">
        {!! $question->descripcion !!}
    </div>

    <hr class="my-6 mx-auto w-100% h-1 bg-gray-100 rounded border-0 md:my-8 dark:bg-purple-400">

    <div>
        <h1 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-b from-purple-400 to-gray-400">
            Respuestas</h1>

        @php
            $conCorrecto = false;
            $usuario = auth()->user();
            $usuarioId = "";
            if($usuario !== null){
                $usuarioId = $usuario->id;
            }

            foreach ($question->answers as $answer){
                if($answer->correct) $conCorrecto = true;
            }

        @endphp

        @foreach ($question->answers as $answer)
            <div class="pt-3 text-black font-bold flex justify-between content-center">
                <div>
                    {{ $answer->user->name }}
                </div>
                @if ($usuarioId == $question->user_id && !$conCorrecto)
                    <a href="{{ route('answer.update', $answer) }}" class="text-green-500 border-2 rounded p-1 border-green-500 hover:bg-green-300 hover:text-white hover:scale-105 transition ease-in-out duration-300 cursor-pointer">
                        ¿ Correcta ?
                    </a>
                @endif
               
            </div>

            
            <div class="mt-3 border-4 p-4 @if($answer->correct == 1 ) border-green-300 @else border-gray-300 @endif">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 text-gray-600">
                        <path fill-rule="evenodd"
                            d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z"
                            clip-rule="evenodd" />
                    </svg>

                    <div class="ml-4">
                        {!!$answer->descripcion!!}
                    </div>

                </div>

            </div>
        @endforeach

    </div>

    <div>

        <h1 class="text-4xl font-bold mt-6 text-transparent bg-clip-text bg-gradient-to-b from-purple-400 to-gray-400">
            Escribe tu Respueta</h1>

    </div>


    <div class="container mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 flex justify-center">
        {!! Form::open(['route' => 'answer.create', 'class' => 'w-full max-w-3xl']) !!}

        {!! Form::hidden('question_id', $question->id) !!}

        {!! Form::label('descripcion', 'Tu respuesta:', [
            'class' => 'block uppercase tracking-wide text-gray-700 text-xs font-bold my-4',
        ]) !!}
        {!! Form::textarea('descripcion', null, ['class' => '']) !!}

        @error('descripcion')
            <small class="text-red-500">{{ $message }}</small>
        @enderror

        <br>

        {!! Form::submit('Enviar Respuesta', [
            'class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-6',
        ]) !!}

        {!! Form::close() !!}

    </div>


</div>


<script src="/js/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#descripcion'), {
            codeBlock: {
                languages: [{
                        language: 'css',
                        label: 'CSS'
                    },
                    {
                        language: 'html',
                        label: 'HTML'
                    },
                    {
                        language: 'js',
                        label: 'JavaScript',
                    },
                    {
                        language: 'php',
                        label: 'PHP'
                    },
                    {
                        language: 'ruby',
                        label: 'RUBY'
                    },
                    {
                        language: 'c',
                        label: 'C'
                    },
                    {
                        language: 'c++',
                        label: 'C++'
                    },
                    {
                        language: 'java',
                        label: 'JAVA'
                    },
                    
                ]
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>





<style>
    .ck-editor__editable {
        min-height: 300px;
    }
</style>
