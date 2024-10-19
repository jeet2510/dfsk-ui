@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.dropdown.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.dropdowns.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.dropdown.fields.id') }}
                        </th>
                        <td>
                            {{ $dropdown->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dropdown.fields.site') }}
                        </th>
                        <td>
                            {{ $dropdown->site->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dropdown.fields.group') }}
                        </th>
                        <td>
                            {{ App\Models\Dropdown::GROUP_SELECT[$dropdown->group] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dropdown.fields.sortorder') }}
                        </th>
                        <td>
                            {{ $dropdown->sortorder }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dropdown.fields.title') }}
                        </th>
                        <td>
                            {{ $dropdown->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dropdown.fields.value') }}
                        </th>
                        <td>
                            {{ $dropdown->value }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.dropdowns.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection