<div class="form-group">
	<label for="{{ $fieldname }}">{{ $placeholder }}</label>
	<textarea class="form-control ckeditor {{ $errors->has($fieldname) ? 'is-invalid' : '' }}" name="{{ $fieldname }}"
		id="{{ $fieldname }}">{!! old($fieldname, $value->$fieldname) !!}</textarea>
	@if($errors->has($fieldname))
	<div class="invalid-feedback">
		{{ $errors->first($fieldname) }}
	</div>
	@endif
	<span class="help-block">{{ trans('cruds.value.fields.'.$fieldname.'_helper') }}</span>
</div>