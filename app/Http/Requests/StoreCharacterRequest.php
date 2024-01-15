<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCharacterRequest extends FormRequest
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
            "name" => "required | max:200",
            "description" => "nullable",
            "attack" => "required",
            "defence" => "required",
            "speed" => "required",
            "life" => "required",
        ];
    }
    public function messages()
    {

        return [
            "name.required" => "Il nome è obbligatorio",
            "name.max" => "Il nome può avere massimo :max caratteri",
            "attack.required" => "L'attacco è obbligatorio",
            "defence.required" => "La difesa è obbligatoria",
            "speed.required" => "La velocità è obbligatoria",
            "life.required" => "La vita è obbligatoria",
        ];
    }
}
