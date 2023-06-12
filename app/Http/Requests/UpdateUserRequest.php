<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
        $unique = Rule::unique('users')->ignoreModel($this->user);
        $prohibited = Rule::prohibitedIf(! $this->user()->isAdmin());

        return [
            'email'             => ['email', $unique],
            'phone'             => ['digits_between:10,15', $unique],
            'password'          => 'confirmed|min:5',
            'current_password'  => 'required_with:password|current_password',
            'photo'             => 'image',
            'type'              => $prohibited,
            'ranking'           => ['nullable', $prohibited, 'in:popular,vip']
        ];
    }

    /**
     * Handle a passed validation attempt.
     *
     * @return void
     */
//    public function passedValidation()
//    {
//        $this->user->update($this->all());
//    }
}
