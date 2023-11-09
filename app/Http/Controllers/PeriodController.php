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
    public function index(Request $request){
        $Filters= new PeriodFilters();
        $QueryItems = $Filters ->transform($request);
        $Period = Period::where($QueryItems);
        return new periodColletion($Period->paginate()->append($request->query()));
    
    }

    public function create()
    {
    //
    }

    public function store(StorePeriodRequest $request)
    {
         return new periodResource(Period::create($request->all()));
    }

    public function show(Period $period)
    {
        return new periodResource($period);
    //
    }

    public function edit(Period $period)
    {
    //
    }

    public function update(UpdatePeriodRequest $request, Period $period)
    {
    // 
        $period->update($request->all());
    }

    public function destroy(Period $period)
    {
    //
    }
}