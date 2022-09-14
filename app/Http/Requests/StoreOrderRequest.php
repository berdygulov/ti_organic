<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'surname' => 'required|min:3',
            'patronymic' => 'required|min:3',
            'phone' => 'required|size:15',
            'email' => 'nullable|email',
            'city' => 'required',
            'address' => 'required',
            'postcode' => 'required|min:3',
        ];
    }
}
