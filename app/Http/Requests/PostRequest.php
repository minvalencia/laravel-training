<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:1',
            'content' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'title.max' => 'The raymund field is required.',
            'content.required' => 'The content field is required.',
        ];
    }
}
