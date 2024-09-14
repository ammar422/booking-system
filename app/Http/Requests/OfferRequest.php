<?php

namespace App\Http\Requests;

use App\Models\Offer;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OfferRequest extends FormRequest
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
        $rules = [
            'visa_num' => ['required', 'string'],
        ];

        if (Offer::where('visa_num', $this->visa_num)->exists()) {
            $rules['passport_num'] = [
                'required',
                'string',
                Rule::exists('offers', 'passport_num')->where(function ($query) {
                    return $query->where('visa_num', $this->visa_num);
                }),
            ];

            $rules['mobile_num'] = [
                'required',
                'string',
                Rule::exists('offers', 'mobile_num')->where(function ($query) {
                    return $query->where('visa_num', $this->visa_num);
                }),
            ];
        }

        return $rules;
    }
}
