<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCharacterRequest extends FormRequest
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
            'name' => ['required', 'max:200', Rule::unique('characters')->ignore($this->character)],
            'description' => ['nullable'],
            'type_id' => ['required','exists:types,id'],
            'attack' => ['required'],
            'defence' => ['required'],
            'speed' => ['required'],
            'life' => ['required'],
            'image' => ['nullable', 'image'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Il nome è obbligatorio',
            'name.max' => 'Il nome deve avere massimo :max caratteri',
            'name.unique' => 'Questo nome esiste già',
            'type_id.required' => 'Il tipo è obbligatorio',
            'type_id.exists' => 'Il tipo inserito non esiste',
            'attack.required' => 'Il valore di attacco è obbligatorio',
            'defence.required' => 'Il valore di difesa è obbligatorio',
            'speed.required' => 'Il valore di velocità è obbligatorio',
            'life.required' => 'Il valore di vita è obbligatorio',
            'image.image' => 'L\'immagine deve essere di tipo image',
        ];
    }
}
