<?php

namespace App\Http\Requests;

use App\Models\SiteInfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSiteInfoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('site_info_edit');
    }

    public function rules()
    {
        return [
            'site_id' => [
                'required',
                'integer',
            ],
            'site_title' => [
                'string',
                'required',
            ],
            'site_favicon' => [
                'required',
            ],
            'header_logo_primary' => [
                'required',
            ],
        ];
    }
}
