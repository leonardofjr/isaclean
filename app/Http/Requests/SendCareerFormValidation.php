<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendCareerFormValidation extends FormRequest
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
            'company_name' => 'required|max:100',
            'first_name' => 'required|max:35',
            'last_name' => 'required|max:35',
            'email' => 'required|max:35',
            'phone' => 'required|max:35',
            'position_of_interest' => 'required|max:35',
            'message' => 'required',
        ];
    }
}
