<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePeriodRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $method =$this->method() ;
            if ($method=='PUT'){
                return [
                    //
                    'short_name'=>['required'],
                    'long_name'=>['required'],
                    'start_date'=>['required','date'],
                    'final_date'=>['required','date'],
                    'status'=>['required'],
                ];
            }else{
                return[
                    'short_name'=>['sometime'],
                    'long_name'=>['sometime'],
                    'start_date'=>['sometime','date'],
                    'final_date'=>['sometime','date'],
                    'status'=>['sometime'],
                ];
            
            } 
    }
}
       

