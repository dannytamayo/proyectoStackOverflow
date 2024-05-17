<x-app-layout>
    <div class="container mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 flex justify-center">
        {!! Form::open(['route' => 'questions.store','class' => 'w-full max-w-3xl']) !!}

        {!! Form::label('title', 'Titulo', [
            'class' => 'block uppercase tracking-wide text-gray-700 text-xs font-bold my-4',
        ]) !!}
        {!! Form::text('title', null, [
            'class' =>
                'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"',
            'placeholder' => 'Titulo',
        ]) !!}

        {!! Form::label('descripcion', 'Descripcion', [
            'class' => 'block uppercase tracking-wide text-gray-700 text-xs font-bold my-4',
        ]) !!}
        {!! Form::textarea('descripcion', null, ['class' => '']) !!}

        {!! Form::label('tag_id', 'Categoria', [
            'class' => 'block uppercase tracking-wide text-gray-700 text-xs font-bold my-4',
        ] ) !!}

        @foreach($tags as $tag)

        <label class="mr-3">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{$tag->name}}
        </label>

        @endforeach

        <br>

        {!! Form::submit('Crear Pregunta', ['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-6']) !!}

        {!! Form::close() !!}

    </div>
</x-app-layout>



<script src="/js/ckeditor.js"></script>
<script src="/js/prism.js"></script>
<link rel="stylesheet" href="/css/prism.css">

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
        min-height: 400px;
    }
</style>
