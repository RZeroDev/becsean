<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnderServiceStoreRequest extends FormRequest
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
        $this->redirect = url()->previous() . '#underservices';
        return [
            'image' => [
                'image',
                'required',
                'mimes:jpeg,png,jpg,gif',
                'max:1024',
            ],
        
            'title' => ['required', 'string', 'unique:under_services,title'],
            'description' => ['required', 'string'],
            'service' => ['required', 'exists:services,id', 'numeric'],
        ];
    }
}
