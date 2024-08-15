<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => ['required','min:5','max:255'],
            'slug' => 'required|unique:posts',
            'category' => 'required',
            'content' => 'required',
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'title.required' => 'El título es requerido',
    //         'title.min' => 'El título debe tener al menos 5 caracteres',
    //         'title.max' => 'El título no debe tener más de 255 caracteres',
    //         'slug.required' => 'El slug es requerido',
    //         'slug.unique' => 'El slug ya está en uso',
    //         'category.required' => 'La categoría es requerida',
    //         'content.required' => 'El contenido es requerido',
    //     ];
    // }

    public function messages()
    {
        return [
            'title.required' => 'The :attribute field is required. (edit)',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'name'
        ];
    }

}
