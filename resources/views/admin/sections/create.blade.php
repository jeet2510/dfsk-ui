@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.section.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sections.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.section.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.section.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sortorder">{{ trans('cruds.section.fields.sortorder') }}</label>
                <input class="form-control {{ $errors->has('sortorder') ? 'is-invalid' : '' }}" type="number" name="sortorder" id="sortorder" value="{{ old('sortorder', '') }}" step="1">
                @if($errors->has('sortorder'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sortorder') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.section.fields.sortorder_helper') }}</span>
            </div>
            <div class="form-group">
							@php
								$selectedpageid = request()->input('pageid');
							@endphp
                <label class="required" for="page_id">{{ trans('cruds.section.fields.page') }}</label>
                <select class="form-control select2 {{ $errors->has('page') ? 'is-invalid' : '' }}" name="page_id" id="page_id" required>
                    @foreach($pages as $id => $entry)
											@if($selectedpageid !=null && $selectedpageid >0 &&$selectedpageid == $id)
											<option value="{{ $id }}" selected>{{ $entry }}</option>
											@else
											<option value="{{ $id }}" {{ old('page_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
											@endif
                    @endforeach
                </select>
                @if($errors->has('page'))
                    <div class="invalid-feedback">
                        {{ $errors->first('page') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.section.fields.page_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="template_id">{{ trans('cruds.section.fields.template') }}</label>
                <select class="form-control select2 {{ $errors->has('template') ? 'is-invalid' : '' }}" name="template_id" id="template_id" required>
                    @foreach($templates as $id => $entry)
                        <option value="{{ $id }}" {{ old('template_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('template'))
                    <div class="invalid-feedback">
                        {{ $errors->first('template') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.section.fields.template_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="section_id">{{ trans('cruds.section.fields.section') }}</label>
                <select class="form-control select2 {{ $errors->has('section') ? 'is-invalid' : '' }}" name="section_id" id="section_id">
                    @foreach($sections as $id => $entry)
                        <option value="{{ $id }}" {{ old('section_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('section'))
                    <div class="invalid-feedback">
                        {{ $errors->first('section') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.section.fields.section_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.section.fields.published') }}</label>
                @foreach(App\Models\Section::PUBLISHED_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('published') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="published_{{ $key }}" name="published" value="{{ $key }}" {{ old('published', '1') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="published_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('published'))
                    <div class="invalid-feedback">
                        {{ $errors->first('published') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.section.fields.published_helper') }}</span>
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