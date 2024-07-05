<?php

namespace App\Http\Requests\article;

use Illuminate\Foundation\Http\FormRequest;

class UpdatearticlesRequest extends FormRequest
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
            'title'=> ['string','nullable'],
            'content'=> ['string', 'nullable'],
            'img'=> ['mimes:jpg,bmp,png', 'max:1024', 'nullable'],
            'media'=> ['mimes:pdf', 'nullable' ],
        ];
    }
}
