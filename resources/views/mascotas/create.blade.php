@extends('layouts.plantillabase')

@section('contenido')
<h1>Crear registros</h1>

<form action="../mascotas" method="post">
@csrf
<div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Mascota</label>
    <input id="mascota" name="mascota" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Raza</label>
    <input id="raza" name="raza" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precioM" name="precioM" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <a href="../mascotas" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection