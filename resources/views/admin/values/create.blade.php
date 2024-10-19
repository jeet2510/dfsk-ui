@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.value.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.values.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="section_id">{{ trans('cruds.value.fields.section') }}</label>
                <select class="form-control select2 {{ $errors->has('section') ? 'is-invalid' : '' }}" name="section_id" id="section_id" required>
                    @foreach($sections as $id => $entry)
                        <option value="{{ $id }}" {{ old('section_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('section'))
                    <div class="invalid-feedback">
                        {{ $errors->first('section') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.value.fields.section_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="title_1">{{ trans('cruds.value.fields.title_1') }}</label>
                <input class="form-control {{ $errors->has('title_1') ? 'is-invalid' : '' }}" type="text" name="title_1" id="title_1" value="{{ old('title_1', '') }}">
                @if($errors->has('title_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.value.fields.title_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="title_2">{{ trans('cruds.value.fields.title_2') }}</label>
                <input class="form-control {{ $errors->has('title_2') ? 'is-invalid' : '' }}" type="text" name="title_2" id="title_2" value="{{ old('title_2', '') }}">
                @if($errors->has('title_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.value.fields.title_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="title_3">{{ trans('cruds.value.fields.title_3') }}</label>
                <input class="form-control {{ $errors->has('title_3') ? 'is-invalid' : '' }}" type="text" name="title_3" id="title_3" value="{{ old('title_3', '') }}">
                @if($errors->has('title_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.value.fields.title_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="text_1">{{ trans('cruds.value.fields.text_1') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('text_1') ? 'is-invalid' : '' }}" name="text_1" id="text_1">{!! old('text_1') !!}</textarea>
                @if($errors->has('text_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('text_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.value.fields.text_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="text_2">{{ trans('cruds.value.fields.text_2') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('text_2') ? 'is-invalid' : '' }}" name="text_2" id="text_2">{!! old('text_2') !!}</textarea>
                @if($errors->has('text_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('text_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.value.fields.text_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="text_3">{{ trans('cruds.value.fields.text_3') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('text_3') ? 'is-invalid' : '' }}" name="text_3" id="text_3">{!! old('text_3') !!}</textarea>
                @if($errors->has('text_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('text_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.value.fields.text_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="link_1">{{ trans('cruds.value.fields.link_1') }}</label>
                <input class="form-control {{ $errors->has('link_1') ? 'is-invalid' : '' }}" type="text" name="link_1" id="link_1" value="{{ old('link_1', '') }}">
                @if($errors->has('link_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('link_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.value.fields.link_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="link_2">{{ trans('cruds.value.fields.link_2') }}</label>
                <input class="form-control {{ $errors->has('link_2') ? 'is-invalid' : '' }}" type="text" name="link_2" id="link_2" value="{{ old('link_2', '') }}">
                @if($errors->has('link_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('link_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.value.fields.link_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="link_3">{{ trans('cruds.value.fields.link_3') }}</label>
                <input class="form-control {{ $errors->has('link_3') ? 'is-invalid' : '' }}" type="text" name="link_3" id="link_3" value="{{ old('link_3', '') }}">
                @if($errors->has('link_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('link_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.value.fields.link_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="images">{{ trans('cruds.value.fields.images') }}</label>
                <div class="needsclick dropzone {{ $errors->has('images') ? 'is-invalid' : '' }}" id="images-dropzone">
                </div>
                @if($errors->has('images'))
                    <div class="invalid-feedback">
                        {{ $errors->first('images') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.value.fields.images_helper') }}</span>
            </div>
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
            <div class="form-group">
                <label>{{ trans('cruds.value.fields.published') }}</label>
                @foreach(App\Models\Value::PUBLISHED_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('published') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="published_{{ $key }}" name="published" value="{{ $key }}" {{ old('published', '1') === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="published_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('published'))
                    <div class="invalid-feedback">
                        {{ $errors->first('published') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.value.fields.published_helper') }}</span>
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
                data.append('crud_id', '{{ $value->id ?? 0 }}');
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
@if(isset($value) && $value->images)
      var files = {!! json_encode($value->images) !!}
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
@if(isset($value) && $value->files)
          var files =
            {!! json_encode($value->files) !!}
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