<div class="form-group">
	<label for="{{ $fieldname }}">{{ $placeholder }}</label>
	<input class="form-control {{ $errors->has($fieldname) ? 'is-invalid' : '' }}" type="text" name="{{ $fieldname }}"
		id="{{ $fieldname }}" value="{{ old($fieldname, $value->$fieldname) }}">
	@if($errors->has($fieldname))
	<div class="invalid-feedback">
		{{ $errors->first($fieldname) }}
	</div>
	@endif
	<span class="help-block">{{ trans('cruds.value.fields.'.$fieldname.'_helper') }}</span>
</div>