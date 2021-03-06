<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
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
            'name' => 'bail|nullable|max:100',
            'email' => 'bail|required|email',
            'subject' => 'bail|nullable|max:150',
            'msg' => 'bail|required|max:1000'

        ];
    }
}
