<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'region-ar' => ['required'],
            'region-en' => ['required'],
            'number' => ['required', 'numeric'],
            ];
    }
    public function messages(): array
    {
        return [
            'region-ar.required' => 'اسم المنطقة بالعربية مطلوب',
            'region-en.required' => 'اسم المنطقة بالانجليزية مطلوب',
            'number.required' => 'رقم التواصل مطلوب',
            'number.numeric' => 'رقم التواصل يجب ان يكون رقم',
        ];
    }
}
