<?php

namespace App\Http\Requests;

use App\Models\Actuality;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ActualityUpdateRequest extends FormRequest
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
        $slug = $this->route('actuality');
        $actuality = Actuality::where('slug', $slug)->firstOrFail();
    
        return [
                'titre' => ['required', 'string', Rule::unique('actualities,title')->ignore($actuality->id)],'titre' => [
                    'required',
                    'string',
                    Rule::unique('actualities', 'title')->ignore($actuality->id),
                ],            
            'contenu' => ['required', 'string'],
            'media_type' => ['required', Rule::in(['video', 'image'])], 
        ];
    }
}
