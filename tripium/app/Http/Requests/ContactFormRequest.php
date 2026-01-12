<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'contact-name' => 'required|max:100',
            'email' => 'email|required|max:255',
            'business' => 'max:255',
            'message' => 'max:255',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ];
    }
}
