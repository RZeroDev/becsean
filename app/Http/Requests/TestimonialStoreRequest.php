<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialStoreRequest extends FormRequest
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
            'photo' => [
                'image',
                'required',
                'mimes:jpeg,png,jpg,gif',
                'max:1024',
            ],
            'fullname' => ['required', 'string'],
            'description' => ['required', 'string'],
            'note' => ['required', 'numeric', 'between:1,5'],
            'poste' => ['required', 'string'],
        ];
    }
}
