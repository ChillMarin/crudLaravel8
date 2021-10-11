@extends('layouts.plantillabase')

@section('contenido')

@php
use App\Models\Persona;
$persona = Persona::all();
echo $persona;
@endphp

<h1>Vista Index good</h1>
<a class="btn btn-outline-primary" href="crud/create" role="button">Crear </a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th> 
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{$articulo->id}}</td>
            <td>{{$articulo->codigo}}</td>
            <td>{{$articulo->descripcion}}</td>
            <td>{{$articulo->cantidad}}</td>
            <td>{{$articulo->precio}}</td>
            <td>/*
                <form action="{{ route ('crud.destroy', $articulo->id)}}" method="POST">
                <a class="btn btn-info" href="../dash/crud/{{$articulo->id}}/edit">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<hr>
<hr>




@endsection
