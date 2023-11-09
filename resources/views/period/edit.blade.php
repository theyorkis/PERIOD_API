@extends('adminlte::page')

@section('title', 'Editar Inscripción')

@section('content_header')
@stop

@section('content')
<form method="post" action="{{ route('periods.update', $period) }}">
    @method("PUT")
    @csrf

    
    </div>
    
    <div class="form-group">
        <label for="start_date">Nombre corto</label>
        <input type="text" name="short_name" id="short_name" class="form-control" value="{{ $period->short_name }}">
    </div>

    <div class="form-group">
        <label for="start_date">Nombre largo</label>
        <input type="text" name="long_name" id="long_name" class="form-control" value="{{ $period->long_name }}">
    </div>

    <div class="form-group">
        <label for="start_date">Fecha de inicio</label>
        <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $period->start_date }}">
    </div>


    <div class="form-group">
        <label for="final_date">Fecha final</label>
        <input type="date" name="final_date" id="final_date" class="form-control" value="{{ $period->final_date }}">
    </div>

    <div class="form-group">
       <label for="Estatus" class="form-label">Estatus</label>
                <select class="form-select"  name="status">
                    <option value="activo">Activo</option>
                    <option value="inactivo">Inactivo</option>
                </select>
     
    </div>

    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop