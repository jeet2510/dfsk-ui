<?php

namespace App\Http\Requests;

use App\Models\ChangeLog;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreChangeLogRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('change_log_create');
    }

    public function rules()
    {
        return [];
    }
}
