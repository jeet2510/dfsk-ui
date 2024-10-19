@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.template.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.templates.update", [$template->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.template.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $template->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.template.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="filename">{{ trans('cruds.template.fields.filename') }}</label>
                <input class="form-control {{ $errors->has('filename') ? 'is-invalid' : '' }}" type="text" name="filename" id="filename" value="{{ old('filename', $template->filename) }}" required>
                @if($errors->has('filename'))
                    <div class="invalid-feedback">
                        {{ $errors->first('filename') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.template.fields.filename_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection