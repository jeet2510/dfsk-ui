<?php

namespace App\Http\Requests;

use App\Models\Section;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSectionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('section_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'sortorder' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'page_id' => [
                'required',
                'integer',
            ],
            'template_id' => [
                'required',
                'integer',
            ],
            'published' => [
                'required',
            ],
        ];
    }
}
