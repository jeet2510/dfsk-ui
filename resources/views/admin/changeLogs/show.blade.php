@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.changeLog.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.change-logs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.changeLog.fields.id') }}
                        </th>
                        <td>
                            {{ $changeLog->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeLog.fields.user') }}
                        </th>
                        <td>
                            {{ $changeLog->user->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeLog.fields.page') }}
                        </th>
                        <td>
                            {{ $changeLog->page->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeLog.fields.section') }}
                        </th>
                        <td>
                            {{ $changeLog->section->title ?? '' }}
                        </td>
                    </tr>
                   
                    <tr>
                        <th>
                            {{ trans('cruds.changeLog.fields.change_to') }}
                        </th>
                        <td>
                            {!! $changeLog->change_to !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.change-logs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection