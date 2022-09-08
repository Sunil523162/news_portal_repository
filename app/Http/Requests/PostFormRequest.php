<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
            'heading' => 'required',
            'sub_heading' => 'required',
            // 'post_time' => 'required',
            // 'post_date' => 'required|date',
            'auther' => 'required',
            'feature_image' => 'nullable|image|mimes:jpg,jpeg,png,svg,gif,jfif,webp|max:2048',
            'description' => 'required',
            'is_featured' => 'boolean',
            'is_popular' => 'boolean',
            'flash_post' => 'boolean',
            'post_category_id' => 'required'
        ];
    }
}
