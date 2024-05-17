@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <h1>Crear</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categories.store', 'autocomplete' => 'off', 'files' => true]) !!}

            @include('admin.categories.partials.form')

            {!! Form::submit('Crear categoría', ['class' => 'btn btn-primary mt-4']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection

@section('js')

    <script>
        document.getElementById("file").addEventListener("change", cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];


            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute("src", event.target.result);
            };

            reader.readAsDataURL(file);
        };
    </script>

@endsection
