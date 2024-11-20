<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTourRequest extends FormRequest
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
            'duration' => 'required|string|max:255',
            'destination_id' => 'required|exists:destinations,id',
            'departure_time' => 'required|date_format:H:i',
            'type_id' => 'required|exists:tour_types,id',
            'number_of_guest' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'overview' => 'required|string',
            'inclusion' => 'required|string',
            'additional_info' => 'nullable|string',
        ];
    }
}
