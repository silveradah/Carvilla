<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarsRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'year' => 'required|integer',
            'transmission' => 'nullable|string|max:50',
            'body_type' => 'nullable|string|max:50',
            'make' => 'nullable|string|max:100',
            'condition' => 'nullable|string',
            'model' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string|max:2000',
            'speed' => 'nullable|string|max:50',
            'engine' => 'nullable|string|max:100',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ];
    }
 }
