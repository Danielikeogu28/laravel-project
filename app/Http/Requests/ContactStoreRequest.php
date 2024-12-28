<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"  => "required|string|max:20|min:2",
            "email" => "required|email|unique:users,email",
            "subject" => "required|max:255",
            "message" => "required|max:5000"
        ];

    }

    function messages(){
        return [
             "name.required" => "name field is required",
             "email.required" => "your email is required"
        ];
    }

}
