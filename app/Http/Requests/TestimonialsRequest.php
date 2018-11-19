<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'newImage' => 'image',
            'newName' => 'bail|required|max:150',
            'newPosition' => 'bail|required|max:25',
            'newContent' => 'bail|required|max:150'
        ];
    }
}
