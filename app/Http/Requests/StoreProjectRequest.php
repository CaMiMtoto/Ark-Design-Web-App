<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'description' => ['nullable', 'string'],
            'project_type_id' => ['required', 'exists:project_types,id'],
            'location' => ['nullable', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'A name is required',
            'name.max' => 'A name must be less than 255 characters',
            'description.string' => 'A description must be a string',
            'project_type_id.required' => 'A project type is required',
            'project_type_id.exists' => 'A project type must exist',
            'location.max' => 'A location must be less than 255 characters',
        ];;
    }
}
