<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateConsultancy extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
     
        $rules =  [
            'vehicle_id' => ['required', 'min:3', 'max:255'],
            'consultant_id' => ['required', 'min:3', 'max:10000'],
            'user_id' => ['min:3', 'max:10000'],
            'km' => ['min:1', 'max:10000'],
        ];

        if ($this->method() === 'PUT') {

            /*  $rules['subject'] =  [

                'required',
                'min:3',
                'max:255',
                Rule::unique('supports')->ignore($this->id)

            ];*/
        }
        return $rules;
    }
}
