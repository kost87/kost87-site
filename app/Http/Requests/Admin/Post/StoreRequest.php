<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'integer|required|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Need to enter title',
            'title.string' => 'Title must be a string',
            'content.required' => 'Need to enter content',
            'content.string' => 'Content must be a string',
            'preview_image.required' => 'Need to choose image',
            'preview_image.file' => 'This must be a file',
            'main_image.required' => 'Need to choose image',
            'main_image.file' => 'This must be a file',
            'category_id.required' => 'Need to choose category',
            'category_id.integer' => 'This must be a number',
            'category_id.exists' => 'There is no such category',
            'tag_ids.array' => 'Incorrect data',
        ];
    }
}
