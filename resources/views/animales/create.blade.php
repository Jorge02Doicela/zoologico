@extends('layouts.app')

@section('content')
    <div class="container"> 
        <h1>Insertar animal</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('animales.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
            </div>
            <div class="mb-3">
                <label for="especie" class="form-label">Especie</label>
                <input type="text" class="form-control" id="especie" name="especie" value="{{ old('especie') }}">
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">URL de la imagen</label>
                <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
