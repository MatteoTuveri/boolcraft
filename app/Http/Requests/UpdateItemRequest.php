<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il campo Nome è obbligatorio.',
            'name.max' => 'Il campo Nome non può superare :max caratteri.',
            'category.required' => 'Il campo Categoria è obbligatorio.',
            'category.max' => 'Il campo Categoria non può superare :max caratteri.',
            'type.required' => 'Il campo Tipo è obbligatorio.',
            'type.max' => 'Il campo Tipo non può superare :max caratteri.',
            'weight.required' => 'Il campo "weight" è obbligatorio.',
            'weight.max' => 'Il campo "weight" non può superare :max caratteri.',
            'cost.required' => 'Il campo "cost" è obbligatorio.',
            'cost.numeric' => 'Il campo "cost" deve essere un numero.',
        ];
    }
}