<div class="form-group">
	<label for="images">{{ $placeholder }}</label>
	<div class="needsclick dropzone {{ $errors->has('images') ? 'is-invalid' : '' }}" id="images-dropzone">
	</div>
	@if($errors->has('images'))
	<div class="invalid-feedback">
		{{ $errors->first('images') }}
	</div>
	@endif
	<span class="help-block">{{ trans('cruds.value.fields.images_helper') }}</span>
</div>