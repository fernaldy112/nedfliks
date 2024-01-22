<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterPostRequest extends FormRequest
{

    protected $stopOnFirstFailure = true;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "nedfliks-username" => ["required", "alpha_dash", "unique:App\Models\User,username", "min:6", "max:16"],
            "nedfliks-email" => ["required", "email", "unique:App\Models\User,email"],
            "nedfliks-password" => ["required", "min:8"],
            "nedfliks-password_confirmation" => ["required"],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nedfliks-username.required' => 'The username field is required.',
            'nedfliks-username.alpha_dash' => 'Username may only consist of alphabet, number, dash, and underscore.',
            'nedfliks-username.unique' => 'The username is already taken.',
            'nedfliks-username.min' => 'The minimum length of the username is 6 characters.',
            'nedfliks-username.max' => 'The maximum length of the username is 16 characters.',
            'nedfliks-email.required' => 'The email field is required.',
            'nedfliks-email.email' => 'Please input a valid email.',
            'nedfliks-email.unique' => 'The email is already taken.',
            'nedfliks-password.required' => 'The password field is required.',
            'nedfliks-password.min' => 'The minimum length of the password is 8 characters.',
            'nedfliks-password_confirmation.required' => 'The password confirmation field is required.',
        ];
    }
}
