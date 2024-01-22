<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordPostRequest extends FormRequest
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
            "nedfliks-email" => ["required", "email"],
            "nedfliks-old-password" => ["required"],
            "nedfliks-new-password" => ["required", "min:8"],
            "nedfliks-new-password_confirmation" => ["required"],
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
            'nedfliks-email.required' => 'The email field is required.',
            'nedfliks-email.email' => 'Please input a valid email.',
            'nedfliks-old-password.required' => 'The old password field is required.',
            'nedfliks-new-password.required' => 'The new password field is required.',
            'nedfliks-new-password.min' => 'The minimum length of the new password is 8 characters.',
            'nedfliks-password_confirmation.required' => 'The new password confirmation field is required.',
        ];
    }
}
