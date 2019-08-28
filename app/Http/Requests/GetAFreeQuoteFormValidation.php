<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetAFreeQuoteFormValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'province' => 'required',
            'facility_type' => 'required',
            'frequency' => 'required',
            'message' => 'required',
        ];
    }
}
