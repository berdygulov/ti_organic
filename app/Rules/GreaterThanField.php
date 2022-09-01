<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class GreaterThanField implements Rule
{
    protected $another_field_value;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct ($field)
    {
        $this->another_field_value = request()->input($field);
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes ($attribute, $value)
    {
        if ($value && $value <= $this->another_field_value) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message ()
    {
        return 'Значение :attribute должно быть больше чем ' . $this->another_field_value;
    }
}
