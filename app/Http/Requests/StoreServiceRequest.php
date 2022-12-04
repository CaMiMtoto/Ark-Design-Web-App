<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'service_type_id' => ['required', 'integer', 'exists:service_types,id'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Service name is required',
            'service_type_id.required' => 'Service type is required',
            'service_type_id.exists' => 'Service type is invalid',
        ];
    }
}
