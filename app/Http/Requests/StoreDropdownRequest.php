<?php

namespace App\Http\Requests;

use App\Models\Dropdown;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDropdownRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('dropdown_create');
    }

    public function rules()
    {
        return [
            'site_id' => [
                'required',
                'integer',
            ],
            'group' => [
                'required',
            ],
            'sortorder' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'title' => [
                'string',
                'required',
            ],
            'value' => [
                'string',
                'nullable',
            ],
        ];
    }
}
