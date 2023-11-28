<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\rules;

class StorePeriodRequest extends FormRequest
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
        return [
        // 
            'short_name' => ['required'],
            'long_name' => ['required'],
            'start_date' => ['required', 'date'],
            'final_date' => ['required', 'date'],
            'status' => ['required'],
        ];
    }
    
    protected function PreparateforValidation(){
    }
}