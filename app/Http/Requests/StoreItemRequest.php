<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'name' => ['required', 'max:200'],
            'description' => ['nullable'],
            'category' => ['required', 'max:100'],
            'type' => ['required', 'max:100'],
            'weight' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/', 'max:10'],
            'cost' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/', 'max:20'],
            'image'=>['nullable','image', 'mimes:jpeg,png,gif,bmp,svg'],

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il campo Nome è obbligatorio.',
            'name.max' => 'Il campo Nome non può superare i 200 caratteri.',
            'category.required' => 'Il campo Categoria è obbligatorio.',
            'category.max' => 'Il campo Categoria non può superare i 100 caratteri.',
            'type.required' => 'Il campo Tipo è obbligatorio.',
            'type.max' => 'Il campo Tipo non può superare i 100 caratteri.',
            'weight.required' => 'Il campo Peso è obbligatorio.',
            'weight.numeric' => 'Il campo peso deve essere un valore numerico.',
            'weight.max' => 'Il campo peso non può superare il valore di 10.',
            'cost.required' => 'Il campo Costo è obbligatorio.',
            'cost.numeric' => 'Il campo costo deve essere un valore numerico decimale.',
            'cost.max' => 'Il campo costo non può superare il valore di 20.',
            'image.image' => "Il campo Immagine deve essere un'immagine.",
            'image.mimes'=>'image must be a image (.jpeg, png, .gif, .bmp, .svg)',

        ];
    }
}
