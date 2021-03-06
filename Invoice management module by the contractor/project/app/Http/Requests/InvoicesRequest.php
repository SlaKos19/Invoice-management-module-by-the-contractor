<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoicesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nip' => 'reqired',
            'company' => 'reqired',
            'date' => 'reqired|date',
            'name' => 'reqired',
            'amount' => 'reqired|numeric',
            'total' => 'reqired|numeric',




        ];
    }
}
