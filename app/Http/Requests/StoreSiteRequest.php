<?php

namespace App\Http\Requests;

use App\Models\Site;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSiteRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('site_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'nullable',
            ],
            'language_code' => [
                'string',
                'nullable',
            ],
            'url' => [
                'string',
                'nullable',
            ],
        ];
    }
}
