<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name-ar' => 'required|string',
            'name-en' => 'required|string',
            'description-ar'=>'required',
            'description-en'=>'required',
            'image'=>'required|mimes:png,jpg',
        ];
    }

    public function messages(): array
    {
        return [
            'name-ar.required' => 'اسم المنتج بالعربية مطلوب',
            'name-en.required' => 'اسم المنتج بالانجليزية مطلوب',
            'name-ar.string' => 'اسم المنتج بالعربية يجب ان يكون نص',
            'name-en.string' => 'اسم المنتج بالانجليزية يجب ان يكون نص',
            'description-ar.required' => 'وصف المنتج بالعربية مطلوب',
            'description-en.required' => 'وصف المنتج بالانجليزية مطلوب',
            'image.required' => 'صورة المنتج مطلوبة',
            'image.mimes' => 'صورة المنتج يجب ان تكون من نوع png او jpg',
        ];
    }
}
