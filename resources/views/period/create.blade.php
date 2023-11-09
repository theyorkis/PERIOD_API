@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
<body>
    <div class="container mb-12">
        <h1 class="text-center">Agregar Periodo</h1>

        <form action="{{ route('periods.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="NombreCorto" class="form-label">Nombre Corto</label>
                <input type="text" class="form-control"  name="short_name" placeholder="Ingrese primer nombre">
            </div>
            <div class="mb-3">
                <label for="NombreLargo" class="form-label">Nombre Largo</label>
                <input type="text" class="form-control"  name="long_name" placeholder="Ingrese nombre completo">
            </div>
            <div class="mb-3">
                <label for="FechaInicio" class="form-label">Fecha de Inicio</label>
                <input type="date" class="form-control"  name="start_date">
            </div>
            <div class="mb-3">
                <label for="FechaFinal" class="form-label">Fecha de Finalización</label>
                <input type="date" class="form-control"  name="final_date">
            </div>
            <div class="mb-3">
                <label for="Estatus" class="form-label">Estatus</label>
                <select class="form-select"  name="status">
                    <option value="activo">Activo</option>
                    <option value="inactivo">Inactivo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Agregar</button>
        </form>
    </div>
</body>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop