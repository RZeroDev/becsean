<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $this->redirect = url()->previous() . '#infoperso';
        return [
            'avatar' => [
                'image',
                'sometimes',
                'mimes:jpeg,png,jpg',
                'max:1024',
            ],
            'lastname' => ['required', 'string'],
            'firstname' => ['required', 'string'],
            'phone' => ['required',],
            'email' => ['sometimes', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}
