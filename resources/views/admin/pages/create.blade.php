@extends('layouts.admin')
@section('content')

<div class="card">
	<div class="card-header">
		{{ trans('global.create') }} {{ trans('cruds.page.title_singular') }}
	</div>

	<div class="card-body">
		<form method="POST" action="{{ route('admin.pages.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label class="required" for="site_id">{{ trans('cruds.page.fields.site') }}</label>
				<select class="form-control select2 {{ $errors->has('site') ? 'is-invalid' : '' }}" name="site_id" id="site_id"
					required>
					@foreach($sites as $id => $entry)
					<option value="{{ $id }}" {{ old('site_id')==$id ? 'selected' : '' }}>{{ $entry }}</option>
					@endforeach
				</select>
				@if($errors->has('site'))
				<div class="invalid-feedback">
					{{ $errors->first('site') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.page.fields.site_helper') }}</span>
			</div>
			<div class="form-group">
				<label for="commonname">{{ trans('cruds.page.fields.commonname') }}</label>
				<input class="form-control {{ $errors->has('commonname') ? 'is-invalid' : '' }}" type="text" name="commonname"
					id="commonname" value="{{ old('commonname', '') }}">
				@if($errors->has('commonname'))
				<div class="invalid-feedback">
					{{ $errors->first('commonname') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.page.fields.commonname_helper') }}</span>
			</div>
			<div class="form-group">
				<label class="required" for="title">{{ trans('cruds.page.fields.title') }}</label>
				<input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title"
					value="{{ old('title', '') }}" required>
				@if($errors->has('title'))
				<div class="invalid-feedback">
					{{ $errors->first('title') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.page.fields.title_helper') }}</span>
			</div>
			<div class="form-group">
				<label for="slug">{{ trans('cruds.page.fields.slug') }}</label>
				<input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug"
					value="{{ old('slug', '') }}">
				@if($errors->has('slug'))
				<div class="invalid-feedback">
					{{ $errors->first('slug') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.page.fields.slug_helper') }}</span>
			</div>
			<div class="form-group">
				<label for="sortorder">{{ trans('cruds.page.fields.sortorder') }}</label>
				<input class="form-control {{ $errors->has('sortorder') ? 'is-invalid' : '' }}" type="number" name="sortorder"
					id="sortorder" value="{{ old('sortorder', '') }}" step="1">
				@if($errors->has('sortorder'))
				<div class="invalid-feedback">
					{{ $errors->first('sortorder') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.page.fields.sortorder_helper') }}</span>
			</div>
			<div class="form-group">
				<div class="form-check {{ $errors->has('is_page') ? 'is-invalid' : '' }}">
					<input type="hidden" name="is_page" value="0">
					<input class="form-check-input" type="checkbox" name="is_page" id="is_page" value="1" {{ old('is_page', 0)==1
						|| old('is_page')===null ? 'checked' : '' }}>
					<label class="form-check-label" for="is_page">{{ trans('cruds.page.fields.is_page') }}</label>
				</div>
				@if($errors->has('is_page'))
				<div class="invalid-feedback">
					{{ $errors->first('is_page') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.page.fields.is_page_helper') }}</span>
			</div>
			<div class="form-group">
				<label for="page_id">{{ trans('cruds.page.fields.page') }}</label>
				<select class="form-control select2 {{ $errors->has('page') ? 'is-invalid' : '' }}" name="page_id" id="page_id">
					@foreach($pages as $id => $entry)
					<option value="{{ $id }}" {{ old('page_id')==$id ? 'selected' : '' }}>{{ $entry }}</option>
					@endforeach
				</select>
				@if($errors->has('page'))
				<div class="invalid-feedback">
					{{ $errors->first('page') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.page.fields.page_helper') }}</span>
			</div>
			<div class="form-group">
				<label>{{ trans('cruds.page.fields.showinheader') }}</label>
				@foreach(App\Models\Page::SHOWINHEADER_RADIO as $key => $label)
				<div class="form-check {{ $errors->has('showinheader') ? 'is-invalid' : '' }}">
					<input class="form-check-input" type="radio" id="showinheader_{{ $key }}" name="showinheader"
						value="{{ $key }}" {{ old('showinheader', '0' )===(string) $key ? 'checked' : '' }}>
					<label class="form-check-label" for="showinheader_{{ $key }}">{{ $label }}</label>
				</div>
				@endforeach
				@if($errors->has('showinheader'))
				<div class="invalid-feedback">
					{{ $errors->first('showinheader') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.page.fields.showinheader_helper') }}</span>
			</div>
			<div class="form-group">
				<label>{{ trans('cruds.page.fields.showinfooter') }}</label>
				@foreach(App\Models\Page::SHOWINFOOTER_RADIO as $key => $label)
				<div class="form-check {{ $errors->has('showinfooter') ? 'is-invalid' : '' }}">
					<input class="form-check-input" type="radio" id="showinfooter_{{ $key }}" name="showinfooter"
						value="{{ $key }}" {{ old('showinfooter', '0' )===(string) $key ? 'checked' : '' }}>
					<label class="form-check-label" for="showinfooter_{{ $key }}">{{ $label }}</label>
				</div>
				@endforeach
				@if($errors->has('showinfooter'))
				<div class="invalid-feedback">
					{{ $errors->first('showinfooter') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.page.fields.showinfooter_helper') }}</span>
			</div>

			<div class="form-group">
				<label for="page_url">{{ trans('cruds.page.fields.page_url') }}</label>
				<input class="form-control {{ $errors->has('page_url') ? 'is-invalid' : '' }}" type="text" name="page_url"
					id="page_url" value="{{ old('page_url', '') }}">
				@if($errors->has('page_url'))
				<div class="invalid-feedback">
					{{ $errors->first('page_url') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.page.fields.page_url_helper') }}</span>
			</div>
			<div class="form-group">
				<label>{{ trans('cruds.page.fields.published') }}</label>
				@foreach(App\Models\Page::PUBLISHED_RADIO as $key => $label)
				<div class="form-check {{ $errors->has('published') ? 'is-invalid' : '' }}">
					<input class="form-check-input" type="radio" id="published_{{ $key }}" name="published" value="{{ $key }}" {{
						old('published', '1' )===(string) $key ? 'checked' : '' }}>
					<label class="form-check-label" for="published_{{ $key }}">{{ $label }}</label>
				</div>
				@endforeach
				@if($errors->has('published'))
				<div class="invalid-feedback">
					{{ $errors->first('published') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.page.fields.published_helper') }}</span>
			</div>
			<div class="form-group">
				<label for="metatitle">{{ trans('cruds.page.fields.metatitle') }}</label>
				<input class="form-control {{ $errors->has('metatitle') ? 'is-invalid' : '' }}" type="text" name="metatitle"
					id="metatitle" value="{{ old('metatitle', '') }}">
				@if($errors->has('metatitle'))
				<div class="invalid-feedback">
					{{ $errors->first('metatitle') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.page.fields.metatitle_helper') }}</span>
			</div>
			<div class="form-group">
				<label for="metadescription">{{ trans('cruds.page.fields.metadescription') }}</label>
				<input class="form-control {{ $errors->has('metadescription') ? 'is-invalid' : '' }}" type="text"
					name="metadescription" id="metadescription" value="{{ old('metadescription', '') }}">
				@if($errors->has('metadescription'))
				<div class="invalid-feedback">
					{{ $errors->first('metadescription') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.page.fields.metadescription_helper') }}</span>
			</div>
			<div class="form-group">
				<label for="metakeywords">{{ trans('cruds.page.fields.metakeywords') }}</label>
				<input class="form-control {{ $errors->has('metakeywords') ? 'is-invalid' : '' }}" type="text"
					name="metakeywords" id="metakeywords" value="{{ old('metakeywords', '') }}">
				@if($errors->has('metakeywords'))
				<div class="invalid-feedback">
					{{ $errors->first('metakeywords') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.page.fields.metakeywords_helper') }}</span>
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