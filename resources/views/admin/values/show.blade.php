@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.value.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.values.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.value.fields.id') }}
                        </th>
                        <td>
                            {{ $value->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.value.fields.section') }}
                        </th>
                        <td>
                            {{ $value->section->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.value.fields.title_1') }}
                        </th>
                        <td>
                            {{ $value->title_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.value.fields.title_2') }}
                        </th>
                        <td>
                            {{ $value->title_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.value.fields.title_3') }}
                        </th>
                        <td>
                            {{ $value->title_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.value.fields.text_1') }}
                        </th>
                        <td>
                            {!! $value->text_1 !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.value.fields.text_2') }}
                        </th>
                        <td>
                            {!! $value->text_2 !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.value.fields.text_3') }}
                        </th>
                        <td>
                            {!! $value->text_3 !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.value.fields.link_1') }}
                        </th>
                        <td>
                            {{ $value->link_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.value.fields.link_2') }}
                        </th>
                        <td>
                            {{ $value->link_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.value.fields.link_3') }}
                        </th>
                        <td>
                            {{ $value->link_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.value.fields.images') }}
                        </th>
                        <td>
                            @foreach($value->images as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.value.fields.files') }}
                        </th>
                        <td>
                            @foreach($value->files as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.value.fields.published') }}
                        </th>
                        <td>
                            {{ App\Models\Value::PUBLISHED_RADIO[$value->published] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.values.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection