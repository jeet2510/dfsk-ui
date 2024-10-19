<?php

namespace App\Http\Requests;

use App\Models\ConfigValue;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateConfigValueRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('config_value_edit');
    }

    public function rules()
    {
        return [
            'site_id' => [
                'required',
                'integer',
            ],
            'value' => [
                'string',
                'nullable',
            ],
        ];
    }
}
