<?php

namespace App\Http\Requests;

use App\Models\Value;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateValueRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('value_edit');
    }

    public function rules()
    {
        return [
            'value_section_id' => [
                'required',
                'integer',
            ],
            'title_1' => [
                'string',
                'nullable',
            ],
            'title_2' => [
                'string',
                'nullable',
            ],
            'title_3' => [
                'string',
                'nullable',
            ],
            'link_1' => [
                'string',
                'nullable',
            ],
            'link_2' => [
                'string',
                'nullable',
            ],
            'link_3' => [
                'string',
                'nullable',
            ],
            'images' => [
                'array',
            ],
            'files' => [
                'array',
            ],
        ];
    }
}
