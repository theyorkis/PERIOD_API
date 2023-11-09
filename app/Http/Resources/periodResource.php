<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class periodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'short_name'=> $this->short_name,
            'long_name'=>$this->long_name,
            'start_date'=>$this->start_date,
            'final_date'=>$this->final_date,
            'status'=>$this->status,
        ];
    }
}
