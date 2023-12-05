<?php

namespace App\Http\Controllers;

use App\Models\Period;
use Illuminate\Http\Request;
use App\Http\Resources\periodColletion;
use App\Filters\PeriodFilters;
use App\Http\Requests\StorePeriodRequest;
use App\Http\Requests\UpdatePeriodRequest;
use App\Http\Resources\periodResource;

class PeriodController extends Controller
{
    /**
     * Muestra una lista de los recursos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \App\Http\Resources\PeriodoCollection
     */
    public function index(Request $request){
         // Inicializa FiltrosPeriodo para manejar la lógica de filtrado
        $filter= new PeriodFilters();
         // Transforma y obtiene los elementos de consulta para el filtrado
        $QueryItems = $filter ->transform($request);
         // Aplica filtros al modelo Periodo
        $Period = Period::where($QueryItems);
        // Devuelve el resultado paginado usando el recurso PeriodoCollection
        return new periodColletion($Period->paginate()->appends($request->query()));
    
    }
    /**
     * Almacena un recurso recién creado en el almacenamiento.
     *
     * @param  \App\Http\Requests\AlmacenarPeriodoRequest  $request
     * @return \App\Http\Resources\RecursoPeriodo
     */

    public function create()
    {
    //
    }

    public function store(StorePeriodRequest $request)
    {
        // Crea un nuevo recurso Periodo y lo devuelve
         return new periodResource(Period::create($request->all()));
    }
     /**
     * Muestra el recurso especificado.
     *
     * @param  \App\Models\Periodo  $periodo
     * @return \App\Http\Resources\RecursoPeriodo
     */
    public function show(Period $period)
    {
         // Devuelve un solo recurso Periodo
        return new periodResource($period);
    //
    }
    
    public function edit(Period $period)
    {
    //
    }
     /**
     * Actualiza el recurso especificado en el almacenamiento.
     *
     * @param  \App\Http\Requests\ActualizarPeriodoRequest  $request
     * @param  \App\Models\Periodo  $periodo
     * @return void
     */
    public function update(UpdatePeriodRequest $request, Period $period)
    {
        // Actualiza el Periodo con los datos de la solicitud
        $period->update($request->all());
    }
     /**
     * Elimina el recurso especificado del almacenamiento.
     *
     * @param  \App\Models\Periodo  $periodo
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Period $period)
    {
    // Elimina el registro de Periodo
    $period->delete();
        // Devuelve una respuesta JSON indicando la eliminación exitosa
        return response()->json(['message' => 'Registro eliminado exitosamente']);
    }
}