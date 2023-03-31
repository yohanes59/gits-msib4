<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => ['required', 'string', 'max:20'],
            'email' => ['required', 'email:rfc,dns', 'unique:users'],
            'password' => ['min:8', 'regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', 'confirmed'],
            'password_confirmation' => ['min:8'],
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'Format Email tidak valid',
            'email.unique' => 'Email sudah terdaftar, mohon daftarkan email yang lain',
            'password.regex' => 'Password harus berisi gabungan huruf dan angka',
        ];
    }
}
