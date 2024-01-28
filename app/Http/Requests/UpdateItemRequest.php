<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateItemRequest extends FormRequest
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
            'category' => 'required|max:100',
            'type' => 'required|max:100',
            'weight' => 'required|max:10',
            'cost' => 'required|max:20',            
            'damage_dice' => ['required', Rule::in(['0','1d4', '1d6', '1d8', '1d10', '1d12','2d4', '3d4', '4d4', '2d6', '3d6', '2d8'])],
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
            'weight.max' => 'Il campo Peso non può superare i 10 caratteri.',
            'cost.required' => 'Il campo Costo è obbligatorio.',
            'cost.numeric' => 'Il campo Costo deve essere un numero.',
            'damage_dice.required' => 'questo campo è obbligatorio.',
            'image.image' => "Il campo Immagine deve essere un'immagine.",
            'image.mimes'=>"l'immagine deve essere di tipo (.jpeg, png, .gif, .bmp, .svg)",
        ];
    }
}
