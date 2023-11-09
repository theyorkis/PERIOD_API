<?php

namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilters;

class PeriodFilters extends ApiFilters {

    protected $safeParams =[
        'short_name' =>'eq',
        'long_name' =>'eq',
        'start_date' =>'eq,lte,gte,',
        'final_date' =>'eq,lte,gte,',
        'status' =>'eq',
        
    ];
   
    protected $columMap =[       
     'short_name' => 'short_name'
            
        ];

    protected $operatorMap =[
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];
   
  
}