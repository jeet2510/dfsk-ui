<?php

namespace App\Http\Requests;

use App\Models\ConfigValue;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyConfigValueRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('config_value_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:config_values,id',
        ];
    }
}
