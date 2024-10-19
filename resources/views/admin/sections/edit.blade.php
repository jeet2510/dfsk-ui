@extends('layouts.admin')
@section('content')

<div class="card">
	<div class="card-header">
		{{ trans('global.edit') }} {{ trans('cruds.section.title_singular') }}
	</div>

	<div class="card-body">
		<form method="POST" action="{{ route('admin.sections.update', [$section->id]) }}" enctype="multipart/form-data">
			@method('PUT')
			@csrf
			<div class="form-group">
				<label class="required" for="title">{{ trans('cruds.section.fields.title') }}</label>
				<input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title"
					value="{{ old('title', $section->title) }}" required>
				@if($errors->has('title'))
				<div class="invalid-feedback">
					{{ $errors->first('title') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.section.fields.title_helper') }}</span>
			</div>
			<div class="form-group">
				<label for="sortorder">{{ trans('cruds.section.fields.sortorder') }}</label>
				<input class="form-control {{ $errors->has('sortorder') ? 'is-invalid' : '' }}" type="number" name="sortorder"
					id="sortorder" value="{{ old('sortorder', $section->sortorder) }}" step="1">
				@if($errors->has('sortorder'))
				<div class="invalid-feedback">
					{{ $errors->first('sortorder') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.section.fields.sortorder_helper') }}</span>
			</div>
			{{-- Case we have a child section, chnaging the parent Page is not allowed --}}
			@if($section->section_id ==null || $section->section_id ==0)
			<div class="form-group">
				<label class="required" for="page_id">{{ trans('cruds.section.fields.page') }}</label>
				<select class="form-control select2 {{ $errors->has('page') ? 'is-invalid' : '' }}" name="page_id" id="page_id"
					required>
					@foreach($pages as $id => $entry)
					<option value="{{ $id }}" {{ (old('page_id') ? old('page_id') : $section->page->id ?? '') == $id ? 'selected'
						: '' }}>{{ $entry }}</option>
					@endforeach
				</select>
				@if($errors->has('page'))
				<div class="invalid-feedback">
					{{ $errors->first('page') }}
				</div>
				@endif
				<span class="help-block">{{ trans('cruds.section.fields.page_helper') }}</span>
			</div>
			@else
			<input type="hidden" name="page_id" id="hf_page_id" value="{{ $section->page_id }}" />
			@endif
			<div class="form-group">
				<label class="required" for="template_id">{{ trans('cruds.section.fields.template') }}</label>
				<select class="form-control select2 {{ $errors->has('template') ? 'is-invalid' : '' }}" name="template_id"
					id="template_id" required>
					@foreach($templates as $id => $entry)
					<option value="{{ $id }}" {{ (old('template_id') ? old('template_id') : $section->template->id ?? '') == $id ?
						'selected' : '' }}>{{ $entry }}</option>
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
				<select class="form-control select2 {{ $errors->has('section') ? 'is-invalid' : '' }}" name="section_id"
					id="section_id">
					@foreach($sections as $id => $entry)
					<option value="{{ $id }}" {{ (old('section_id') ? old('section_id') : $section->section->id ?? '') == $id ?
						'selected' : '' }}>{{ $entry }}</option>
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
					<input class="form-check-input" type="radio" id="published_{{ $key }}" name="published" value="{{ $key }}" {{
						old('published', $section->published) === (string) $key ? 'checked' : '' }} required>
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
			<input type="hidden" value="{{ $section->id }}" name="value_section_id" />
			<div class="shadow p-4 mb-4">
				<h3 class="border-bottom mb-4 pb-2">
					{{ trans('global.edit') }} {{ trans('cruds.value.title') }}
				</h3>
				<div class="form-group pagetemplates">
					@include('/website/templates/'.$section->template->filename,['data'=>$section])
				</div>
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

@section('scripts')
<script>
	$(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.values.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $section->values[0]->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
	var uploadedImagesMap = {}
Dropzone.options.imagesDropzone = {
    url: '{{ route('admin.values.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="images[]" value="' + response.name + '">')
      uploadedImagesMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedImagesMap[file.name]
      }
      $('form').find('input[name="images[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($section->values[0]) && $section->values[0]->images)
      var files = {!! json_encode($section->values[0]->images) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="images[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}

</script>
<script>
	var uploadedFilesMap = {}
Dropzone.options.filesDropzone = {
    url: '{{ route('admin.values.storeMedia') }}',
    maxFilesize: 2, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="files[]" value="' + response.name + '">')
      uploadedFilesMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedFilesMap[file.name]
      }
      $('form').find('input[name="files[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($section->values[0]) && $section->values[0]->files)
          var files =
            {!! json_encode($section->values[0]->files) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="files[]" value="' + file.file_name + '">')
            }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection