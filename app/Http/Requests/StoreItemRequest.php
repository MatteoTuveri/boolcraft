<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
            'name' => ['required', 'max:200', 'unique:items'],
            'text' => ['nullable'],
            'slug' => ['required', 'max:255'],
            'category' => ['required', 'max:100'],
            'type' => ['required', 'max:100'],
            'weight' => ['required', 'max:10'],
            'cost' => ['required', 'max:20'],
            'image' => ['nullable', 'image'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome è obbligatorio',
            'name.max' => 'Il nome deve avere massimo :max caratteri',
            'name.unique' => 'Questo oggetto esiste già',
            'category.required' => 'Il valore di attacco è obbligatorio',
            'category.max' => 'Il valore deve avere massimo :max caratteri',
            'type.required' => 'Il valore di difesa è obbligatorio',
            'type.max' => 'Il valore deve avere massimo :max caratteri',
            'weight.required' => 'Il valore di velocità è obbligatorio',
            'weight.max' => 'Il valore deve avere massimo :max caratteri',
            'cost.required' => 'Il valore di vita è obbligatorio',
            'cost.max' => 'Il valore deve avere massimo :max caratteri',
            'image.image' => 'L\'immagine deve essere di tipo image',
        ];
    }
}
