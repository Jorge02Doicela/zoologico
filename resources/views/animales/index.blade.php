@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Hola, estoy en index</h1>
        <a href="{{route('animales.create')}}" class="btn btn-primary">Agregar animal</a>
        <table class="table mt-3">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Especie</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td scope="row">Copo</td>
                    <td scope="row">Especie</td>
                    <td scope="row">
                        <a href="#" class="btn btn-warning">Ver</a>
                        <a href="#" class="btn btn-info">Editar</a>
                        <a href="#" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
@endsection
