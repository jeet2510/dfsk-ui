@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.configValue.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.config-values.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.configValue.fields.id') }}
                        </th>
                        <td>
                            {{ $configValue->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.configValue.fields.site') }}
                        </th>
                        <td>
                            {{ $configValue->site->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.configValue.fields.name') }}
                        </th>
                        <td>
                            {{ $configValue->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.configValue.fields.value') }}
                        </th>
                        <td>
                            {{ $configValue->value }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.config-values.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection