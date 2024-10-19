@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.siteInfo.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.site-infos.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="site_title">{{ trans('cruds.siteInfo.fields.site_title') }}</label>
                <input class="form-control {{ $errors->has('site_title') ? 'is-invalid' : '' }}" type="text" name="site_title" id="site_title" value="{{ old('site_title', '') }}" required>
                @if($errors->has('site_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('site_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.siteInfo.fields.site_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="site_favicon">{{ trans('cruds.siteInfo.fields.site_favicon') }}</label>
                <div class="needsclick dropzone {{ $errors->has('site_favicon') ? 'is-invalid' : '' }}" id="site_favicon-dropzone">
                </div>
                @if($errors->has('site_favicon'))
                    <div class="invalid-feedback">
                        {{ $errors->first('site_favicon') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.siteInfo.fields.site_favicon_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="header_logo_primary">{{ trans('cruds.siteInfo.fields.header_logo_primary') }}</label>
                <div class="needsclick dropzone {{ $errors->has('header_logo_primary') ? 'is-invalid' : '' }}" id="header_logo_primary-dropzone">
                </div>
                @if($errors->has('header_logo_primary'))
                    <div class="invalid-feedback">
                        {{ $errors->first('header_logo_primary') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.siteInfo.fields.header_logo_primary_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="header_logo_secondary">{{ trans('cruds.siteInfo.fields.header_logo_secondary') }}</label>
                <div class="needsclick dropzone {{ $errors->has('header_logo_secondary') ? 'is-invalid' : '' }}" id="header_logo_secondary-dropzone">
                </div>
                @if($errors->has('header_logo_secondary'))
                    <div class="invalid-feedback">
                        {{ $errors->first('header_logo_secondary') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.siteInfo.fields.header_logo_secondary_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="footer_logo">{{ trans('cruds.siteInfo.fields.footer_logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('footer_logo') ? 'is-invalid' : '' }}" id="footer_logo-dropzone">
                </div>
                @if($errors->has('footer_logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('footer_logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.siteInfo.fields.footer_logo_helper') }}</span>
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
    Dropzone.options.siteFaviconDropzone = {
    url: '{{ route('admin.site-infos.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 30,
      height: 30
    },
    success: function (file, response) {
      $('form').find('input[name="site_favicon"]').remove()
      $('form').append('<input type="hidden" name="site_favicon" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="site_favicon"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($siteInfo) && $siteInfo->site_favicon)
      var file = {!! json_encode($siteInfo->site_favicon) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="site_favicon" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
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
    Dropzone.options.headerLogoPrimaryDropzone = {
    url: '{{ route('admin.site-infos.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
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
      $('form').find('input[name="header_logo_primary"]').remove()
      $('form').append('<input type="hidden" name="header_logo_primary" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="header_logo_primary"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($siteInfo) && $siteInfo->header_logo_primary)
      var file = {!! json_encode($siteInfo->header_logo_primary) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="header_logo_primary" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
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
    Dropzone.options.headerLogoSecondaryDropzone = {
    url: '{{ route('admin.site-infos.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
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
      $('form').find('input[name="header_logo_secondary"]').remove()
      $('form').append('<input type="hidden" name="header_logo_secondary" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="header_logo_secondary"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($siteInfo) && $siteInfo->header_logo_secondary)
      var file = {!! json_encode($siteInfo->header_logo_secondary) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="header_logo_secondary" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
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
    Dropzone.options.footerLogoDropzone = {
    url: '{{ route('admin.site-infos.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
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
      $('form').find('input[name="footer_logo"]').remove()
      $('form').append('<input type="hidden" name="footer_logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="footer_logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($siteInfo) && $siteInfo->footer_logo)
      var file = {!! json_encode($siteInfo->footer_logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="footer_logo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
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