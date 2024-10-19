@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.site.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sites.update", [$site->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">{{ trans('cruds.site.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $site->title) }}">
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="language_code">{{ trans('cruds.site.fields.language_code') }}</label>
                <input class="form-control {{ $errors->has('language_code') ? 'is-invalid' : '' }}" type="text" name="language_code" id="language_code" value="{{ old('language_code', $site->language_code) }}">
                @if($errors->has('language_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('language_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.language_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="url">{{ trans('cruds.site.fields.url') }}</label>
                <input class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" type="text" name="url" id="url" value="{{ old('url', $site->url) }}">
                @if($errors->has('url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.url_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('isdefault') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="isdefault" value="0">
                    <input class="form-check-input" type="checkbox" name="isdefault" id="isdefault" value="1" {{ $site->isdefault || old('isdefault', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="isdefault">{{ trans('cruds.site.fields.isdefault') }}</label>
                </div>
                @if($errors->has('isdefault'))
                    <div class="invalid-feedback">
                        {{ $errors->first('isdefault') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.isdefault_helper') }}</span>
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