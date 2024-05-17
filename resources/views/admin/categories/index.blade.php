@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.categories.create') }}">Nueva categoria</a>
    <h1>Categorias</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th colspan="2">ACCIONES</th>
                        {{-- <th colspan="2"></th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.categories.edit', $tag) }}">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.categories.destroy', $tag->id) }}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{  $tags->links('pagination::bootstrap-4') }}
        </div> 
    </div>

 


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        tbody {
            display: block;
            height: 30rem;
            overflow: auto;
        }

        tbody::-webkit-scrollbar {
            width: 0%;
        }

        thead,
        tbody tr {
            display: table;
            width: 100%;
            table-layout: fixed;
            /* even columns width , fix width of table too*/
        }

        thead {
            width: calc(100% - 1em)
                /* scrollbar is average 1em/16px width, remove it from thead width */
        }

        table {
            width: 100%;
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
