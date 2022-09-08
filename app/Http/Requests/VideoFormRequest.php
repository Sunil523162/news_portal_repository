<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoFormRequest extends FormRequest
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
            'heading' => 'required|string',
            'post_date' => 'required|date',
            'url' => 'required|url',
            'banner' => 'nullable|image|mimes:jpg,jpeg,png,webp,jfif,gif|max:2048',
        ];
    }
}
