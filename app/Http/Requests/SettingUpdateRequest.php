<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
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
            'company_name'=>['required','string'],
            'company_phone'=>['required','string'],
            'company_email'=>['required','string'],
            'company_facebook'=>['nullable','url'],
            'analytics'=>['nullable','string'],
            'company_instagram'=>['nullable','url'],
            'company_youtube'=>['nullable','url'],
            'company_twitter'=>['nullable','url'],
            'company_linkedin'=>['nullable','url'],
            'company_tiktok'=>['nullable','url'],
            'company_headquarters'=>['nullable','string'],
        ];
    }
}
