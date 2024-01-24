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
            'name' => 'required|max:200',
            'description' => 'nullable',
            'slug' => 'required|max:200',
            'category' => 'required|max:100',
            'type' => 'required|max:100',
            'weight' => 'required|max:10',
            'cost' => 'required|max:20',
            'image' => 'nullable|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il campo Nome è obbligatorio.',
            'name.max' => 'Il campo Nome non può superare i 200 caratteri.',
            'slug.required' => 'Il campo Slug è obbligatorio.',
            'slug.max' => 'Il campo Slug non può superare i 200 caratteri.',
            'category.required' => 'Il campo Categoria è obbligatorio.',
            'category.max' => 'Il campo Categoria non può superare i 100 caratteri.',
            'type.required' => 'Il campo Tipo è obbligatorio.',
            'type.max' => 'Il campo Tipo non può superare i 100 caratteri.',
            'weight.required' => 'Il campo Peso è obbligatorio.',
            'weight.max' => 'Il campo Peso non può superare i 10 caratteri.',
            'cost.required' => 'Il campo Costo è obbligatorio.',
            'cost.numeric' => 'Il campo Costo deve essere un numero.',
            'image.max' => 'Il campo Immagine non può superare i 255 caratteri.',
        ];
    }
}
