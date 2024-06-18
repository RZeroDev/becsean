<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutomatingUpdateRequest extends FormRequest
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
            'linkedin_client_id' => 'nullable|string',
            'linkedin_page_id' => 'nullable|string',
            'linkedin_client_secret' => 'nullable|string',
            'linkedin_callback' => 'nullable|url',
            'linkedin_access_token' => 'nullable|string',
            'twitter_consumer_key' => 'nullable|string',
            'twitter_account_id' => 'nullable|string',
            'twitter_consumer_secret' => 'nullable|string',
            'twitter_access_token' => 'nullable|string',
            'twitter_bearer_token' => 'nullable|string',
            'twitter_access_token_secret' => 'nullable|string',
            'instagram_page_id' => 'nullable|string',
            'facebook_page_id' => 'nullable|string',
            'facebook_access_token' => 'nullable|string',
        ];
    }
}
