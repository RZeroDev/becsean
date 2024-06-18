<?php

namespace App\Http\Requests;

use App\Models\Partner;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PartnerUpdateRequest extends FormRequest
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
        $slug = $this->route('partner');
        $partner = Partner::where('slug', $slug)->firstOrFail();
    
        return [
                'nom' => ['required', 'string', Rule::unique('partners,name')->ignore($partner->id)],'nom' => [
                    'required',
                    'string',
                    Rule::unique('partners', 'name')->ignore($partner->id),
                ],            
            'logo' => [
                'image',
                'nullable',
                'mimes:jpeg,png,jpg,gif',
                'max:1024',
            ],
        ];
    }
}
