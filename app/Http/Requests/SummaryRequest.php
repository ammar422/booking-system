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
            'visa_num' => 'required|string|max:255',
            // 'visa_type' => 'required|string|max:255',
            // 'visit_type' => 'required|string|max:255',
            'passport_num' => 'required|string|max:20',
            'mobile_num' => 'required|string|max:15',
            'nationality' => 'required|string|max:100',
            'border_number' => 'required|string|max:100',
            'visa_expaire_date' => 'required|date|after:today',
            'email' => 'required|email|max:255',
            'marital_status' => 'required|string|max:50',
            'city' => 'required|string|max:100',
            'renewal_period' => 'required|integer|min:1', // Optional field  
            'mail_box' => 'nullable|string|max:255', // Optional field  
            'post_code' => 'required|string|max:10',
            'address' => 'required|string|max:255',
            // 'visa_beneficiaries_num' => 'required|integer|min:0', // Optional field  
            // 'document_status' => 'required|string|max:50',
            // 'total_price' => 'required|numeric|min:0',
            // 'guarantee_board_status' => 'required|string|max:50',
            'birth_date' => 'required|date|before:today',
        ];
    }
}
