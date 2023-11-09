@extends('adminlte::page')

@section('title', 'Detalles de Inscripción')

@section('content_header')
    <h1 class="text-center mb-4">Detalles de Inscripción</h1>
@stop

@section('content')
<div class="row justify-content-center align-items-center" style="height: 80vh;">
    <div class="col-md-6">
        <div class="card border border-dark d-flex flex-column h-100" style="border-color: #000;">
            <div class="card-header">
                <h5 class="card-title text-center">Información del periodo</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item border" style="border-color: #000;"><strong>Nombre_corto:</strong> {{ $period->short_name }}</li>
                    <li class="list-group-item border" style="border-color: #000;"><strong>Nombre_largo:</strong> {{ $period->long_name }}</li>
                    <li class="list-group-item border" style="border-color: #000;"><strong>Fecha_inicio:</strong> {{ $period->start_date }}</li>
                    <li class="list-group-item border" style="border-color: #000;"><strong>Fecha_final:</strong> {{ $period->final_date }}</li>
                    <li class="list-group-item border" style="border-color: #000;"><strong>Estatus:</strong> {{ $period->status }}</li>
                </ul>
            </div>
            <div class="card-footer">
                <a href="{{ route('periods.index') }}" class="btn btn-primary">Regresar a la lista</a>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="">
@stop