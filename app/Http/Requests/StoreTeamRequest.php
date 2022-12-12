<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'image' => ['required_if:id,0', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
          /*  'facebook' => ['nullable', 'string', 'max:255', 'url', 'starts_with:https://www.facebook.com/'],
            'twitter' => ['nullable', 'string', 'max:255', 'url', 'starts_with:https://twitter.com/'],
            'instagram' => ['nullable', 'string', 'max:255', 'url', 'starts_with:https://www.instagram.com/'],
            'linkedin' => ['nullable', 'string', 'max:255', 'url', 'starts_with:https://www.linkedin.com/'],*/
            'bio' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'position.required' => 'Position is required',
            'image.required_if' => 'Image is required',
            'image.image' => 'Image must be an image',
            'image.mimes' => 'Image must be a file of type: jpg, jpeg, png, webp',
            'image.max' => 'Image may not be greater than 2048 kilobytes',
        ];
    }
}
