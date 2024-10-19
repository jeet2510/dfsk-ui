<?php

namespace App\Http\Requests;

use App\Models\Page;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('page_edit');
    }

    public function rules()
    {
        return [
            'site_id' => [
                'required',
                'integer',
            ],
            'commonname' => [
                'string',
                'nullable',
            ],
            'title' => [
                'string',
                'required',
            ],
            'slug' => [
                'string',
                'nullable',
            ],
            'sortorder' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'page_url' => [
                'string',
                'nullable',
            ],
            'metatitle' => [
                'string',
                'nullable',
            ],
            'metadescription' => [
                'string',
                'nullable',
            ],
            'metakeywords' => [
                'string',
                'nullable',
            ],
        ];
    }
}
