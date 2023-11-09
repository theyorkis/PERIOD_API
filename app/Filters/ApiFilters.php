<?php

namespace App\Filters;
use Illuminate\Http\Request;

class ApiFilters{

    protected $safeParams =[];
    protected $columMap =[];
    protected $OperatorMap =[];

    public function transform(Request $request){
        $eloQuery = [];

        foreach($this->safeParams as $parm => $operators){
            $query = $request->query($parm);
            if(!isset($query)){
                continue;
            }
            $colum = $this->columMap[$parm] ?? $parm;
            foreach($operators as $operator){
                if (isset($query[$operator]) && isset($this->OperatorMap[$operator])) {
                    $eloQuery[] = [$colum, $this->OperatorMap[$operator], $query[$operator]];
            
            
                }
            }
        }
        return $eloQuery;
    }
}