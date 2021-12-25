<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'buy_price' => !empty($this->buy_price) ? ['numeric'] : 'sometimes',
            'selling_price' => !empty($this->selling_price) ? ['numeric'] : 'sometimes',
            'available_quantity' => !empty($this->available_quantity) ? ['numeric'] : 'sometimes',
        ];

    }
}
