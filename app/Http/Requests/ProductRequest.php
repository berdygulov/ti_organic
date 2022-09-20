<?php

namespace App\Http\Requests;

use App\Rules\GreaterThanField;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize ()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules ()
    {
        return [
            'product.title'     => ['required'],
            'product.price'     => ['required', 'numeric'],
            'product.old_price' => [new GreaterThanField('product.price')],
        ];
    }
}
