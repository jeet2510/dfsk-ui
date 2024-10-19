@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.dropdown.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.dropdowns.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="site_id">{{ trans('cruds.dropdown.fields.site') }}</label>
                <select class="form-control select2 {{ $errors->has('site') ? 'is-invalid' : '' }}" name="site_id" id="site_id" required>
                    @foreach($sites as $id => $entry)
                        <option value="{{ $id }}" {{ old('site_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('site'))
                    <div class="invalid-feedback">
                        {{ $errors->first('site') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.dropdown.fields.site_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.dropdown.fields.group') }}</label>
                <select class="form-control {{ $errors->has('group') ? 'is-invalid' : '' }}" name="group" id="group" required>
                    <option value disabled {{ old('group', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Dropdown::GROUP_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('group', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('group'))
                    <div class="invalid-feedback">
                        {{ $errors->first('group') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.dropdown.fields.group_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sortorder">{{ trans('cruds.dropdown.fields.sortorder') }}</label>
                <input class="form-control {{ $errors->has('sortorder') ? 'is-invalid' : '' }}" type="number" name="sortorder" id="sortorder" value="{{ old('sortorder', '') }}" step="1">
                @if($errors->has('sortorder'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sortorder') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.dropdown.fields.sortorder_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.dropdown.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.dropdown.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="value">{{ trans('cruds.dropdown.fields.value') }}</label>
                <input class="form-control {{ $errors->has('value') ? 'is-invalid' : '' }}" type="text" name="value" id="value" value="{{ old('value', '') }}">
                @if($errors->has('value'))
                    <div class="invalid-feedback">
                        {{ $errors->first('value') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.dropdown.fields.value_helper') }}</span>
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