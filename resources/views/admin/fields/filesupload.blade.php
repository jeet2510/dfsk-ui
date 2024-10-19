<div class="form-group">
	<label for="files">{{ trans('cruds.value.fields.files') }}</label>
	<div class="needsclick dropzone {{ $errors->has('files') ? 'is-invalid' : '' }}" id="files-dropzone">
	</div>
	@if($errors->has('files'))
	<div class="invalid-feedback">
		{{ $errors->first('files') }}
	</div>
	@endif
	<span class="help-block">{{ trans('cruds.value.fields.files_helper') }}</span>
</div>