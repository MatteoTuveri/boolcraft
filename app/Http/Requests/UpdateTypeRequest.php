<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTypeRequest extends FormRequest
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
            'name'=>['required','max:200',Rule::unique('types')->ignore($this->type)],
            'description'=>'nullable',
            'image'=>['nullable','image'],
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Il nome è obbligatorio',
            'name.max' => 'Il nome deve avere massimo :max caratteri',
            'name.unique' => 'Questo tipo esiste già',
            'image.image' => 'L\'immagine deve essere di tipo image',
        ];
    }
}
