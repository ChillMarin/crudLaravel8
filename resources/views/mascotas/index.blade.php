@extends('layouts.plantillabase')

@section('contenido')

<a class="btn btn-outline-primary" href="mascotas/create" role="button">Crear </a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Codigo</th>
                <th scope="col">Mascota</th>
                <th scope="col">Raza</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($mascotas as $mascota)
                <tr>
                    <td>{{$mascota->id}}</td>
                    <td>{{$mascota->codigo}}</td>
                    <td>{{$mascota->mascota}}</td>
                    <td>{{$mascota->raza}}</td>
                    <td>{{$mascota->precio}}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection