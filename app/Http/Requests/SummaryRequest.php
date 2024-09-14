<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SummaryRequest extends FormRequest
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
            'nationality' => 'required|string',
            'border_number' => 'required|string',
            'visa_expaire_date' => 'required|date|after:today', // Ensure the date is in the future  
            'email' => 'required|email',
            'marital_status' => 'required|string',
            'city' => 'required|string',
            'renewal_period' => 'nullable|integer',
            'mail_box' => 'nullable|string',
            'post_code' => 'nullable|string',
            'address' => 'nullable|string',
        ];
    }
}
