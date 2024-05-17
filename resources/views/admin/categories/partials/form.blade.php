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

<div class="form-group">
    {!! Form::label('color', 'Color') !!}
    {{ Form::input('color', 'color[0]', null, ['class' => 'form-control-color ml-3', 'placeholder' => 'Ingrese un color', 'id' => 'exampleInputTitle1']) }}

    @error('color')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            <img id="picture" src="https://cdn.pixabay.com/photo/2016/11/19/14/00/code-1839406_960_720.jpg"
                alt="">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen de la categoría') !!}
            {!! Form::file('file', ['class' => 'form-control-file']) !!}
        </div>

        @error('file')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
