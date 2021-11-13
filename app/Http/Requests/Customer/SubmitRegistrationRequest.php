<?php

namespace App\Http\Requests\Customer;

use App\Models\Country;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SubmitRegistrationRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'email:dns'],
            'country_id' => ['required', Rule::exists(Country::class, 'id')],
            'full_name' => [
                'required', 'min:2', 'max:100', 'first_and_last_name'
            ],
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'This email has already signed up.'
                            . ' Please check your inbox for a mail that contains further instructions',
        ];
    }

    public function attributes()
    {
        return [
            'country_id' => 'country',
        ];
    }
}
