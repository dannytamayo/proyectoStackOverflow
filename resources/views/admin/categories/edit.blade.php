@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoría']) !!}

                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripcion') !!}
                {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}

                @error('descripcion')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

            </div>

            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

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
        console.log('Hi!');
    </script>
@stop
