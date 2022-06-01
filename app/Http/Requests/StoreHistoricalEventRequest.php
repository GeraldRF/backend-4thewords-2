<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHistoricalEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'img_url' => 'required',
            'name' => 'required|max:100',
            'description' => 'required|max:150',
            'date' => 'required',
            'popularity' => 'required',
            'country' => 'required|max:60',
            'coordinates' => 'required',
        ];
    }
}
