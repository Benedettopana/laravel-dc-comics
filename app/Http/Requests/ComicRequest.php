<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|min:3|max:50',
            'price' => 'required|min:3|max:10',
            'series' => 'required|min:3|max:50',
            'sales_date' => 'required',
            'type' => 'required|min:3|max:30'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titono è obbligatorio!',
            'title.min' => 'Il titono deve conterene almeno :min caratteri',
            'title.max' => 'Il titono può contenere al massimo :max caratteri',
            'price.required' => 'Il prezzo è obbligatorio!',
            'price.min' => 'Il prezzo deve conterene almeno :min caratteri',
            'price.max' => 'Il prezzo può contenere al massimo :max caratteri',
            'series.required' => 'La serie è obbligatoria!',
            'series.min' => 'La serie deve conterene almeno :min caratteri',
            'series.max' => 'La serie può contenere al massimo :max caratteri',
            'sales_date.required' => 'La data è obbligatoria!',
            'type.required' => 'Il tipo è obbligatorio!',
            'type.min' => 'Il tipo deve conterene almeno :min caratteri',
            'type.max' => 'Il tipo può contenere al massimo :max caratteri',
        ];
    }
}
