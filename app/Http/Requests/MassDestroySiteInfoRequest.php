<?php

namespace App\Http\Requests;

use App\Models\SiteInfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySiteInfoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('site_info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:site_infos,id',
        ];
    }
}
