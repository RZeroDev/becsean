<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
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
        $email = $this->route('user');
        $user = User::where('email', $email)->firstOrFail();

        // dd($user);
        return [
            'email' => ['required', 'string', Rule::unique('users,email')->ignore($user->id)],'email' => [
                'required',
                'string',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'nom' => ['required', 'string'],
            'prenom' => ['required', 'string'],
            'role' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'image' => [
                'image',
                'nullable',
                'mimes:jpeg,png,jpg,gif',
                'max:1024',
            ],
        ];
    }
}
