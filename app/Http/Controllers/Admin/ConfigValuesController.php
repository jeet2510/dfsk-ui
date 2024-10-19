<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyConfigValueRequest;
use App\Http\Requests\StoreConfigValueRequest;
use App\Http\Requests\UpdateConfigValueRequest;
use App\Models\ConfigValue;
use App\Models\Site;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ConfigValuesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('config_value_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $configValues = ConfigValue::with(['site'])->get();

        return view('admin.configValues.index', compact('configValues'));
    }

    public function create()
    {
        abort_if(Gate::denies('config_value_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sites = Site::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.configValues.create', compact('sites'));
    }

    public function store(StoreConfigValueRequest $request)
    {
        $configValue = ConfigValue::create($request->all());

        return redirect()->route('admin.config-values.index');
    }

    public function edit(ConfigValue $configValue)
    {
        abort_if(Gate::denies('config_value_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sites = Site::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $configValue->load('site');

        return view('admin.configValues.edit', compact('configValue', 'sites'));
    }

    public function update(UpdateConfigValueRequest $request, ConfigValue $configValue)
    {
        $configValue->update($request->all());

        return redirect()->route('admin.config-values.index');
    }

    public function show(ConfigValue $configValue)
    {
        abort_if(Gate::denies('config_value_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $configValue->load('site');

        return view('admin.configValues.show', compact('configValue'));
    }

    public function destroy(ConfigValue $configValue)
    {
        abort_if(Gate::denies('config_value_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $configValue->delete();

        return back();
    }

    public function massDestroy(MassDestroyConfigValueRequest $request)
    {
        $configValues = ConfigValue::find(request('ids'));

        foreach ($configValues as $configValue) {
            $configValue->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
