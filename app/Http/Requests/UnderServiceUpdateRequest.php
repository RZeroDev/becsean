<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnderServiceUpdateRequest extends FormRequest
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
            'image' => [
                'image',
                'nullable',
                'mimes:jpeg,png,jpg,gif',
                'max:1024',
            ],
        
            'title' => ['required', 'string', 'unique:under_services,title,'  . $this->underService->id],
            'description' => ['required', 'string'],
            'service' => ['required', 'exists:services,id', 'numeric'],
        ];
    }
}
