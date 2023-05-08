<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'role' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Need to enter name',
            'email.required' => 'Need to enter e-mail',
            'password.required' => 'Need to enter password',
            'email.email' => 'The e-mail must be in the following format: user@somedomain.com',
            'email.unique' => 'The user with the same e-mail already exists'
        ];
    }
}
