<div class="card">
	<div class="card-header">
		{{ trans('cruds.section.title_singular') }} {{ trans('global.list') }}
	</div>

	<div class="card-body">
		<div>
			@can('section_create')
			<div style="margin-bottom: 10px;" class="row">
				<div class="col-lg-12">
					<a class="btn btn-success" href="{{ route('admin.sections.create') .'?pageid='. $pageid }}">
						{{ trans('global.add') }} {{ trans('cruds.section.title_singular') }}
					</a>
				</div>
			</div>
			@endcan

		</div>
		<div class="table-responsive">
			<table class=" table table-bordered table-striped table-hover datatable datatable-Section">
				<thead>
					<tr>

						<th>
							{{ trans('cruds.section.fields.id') }}
						</th>
						<th>
							{{ trans('cruds.section.fields.title') }}
						</th>
						<th>
							{{ trans('cruds.section.fields.sortorder') }}
						</th>
						<th>
							{{ trans('cruds.section.fields.page') }}
						</th>
						<th>
							{{ trans('cruds.section.fields.template') }}
						</th>
						<th>
							{{ trans('cruds.section.fields.published') }}
						</th>
						<th>
							&nbsp;
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($sections as $key => $section)
					@if(!$section->section_id)
					<tr data-entry-id="{{ $section->id }}">

						<td>
							<div style="cursor:pointer;"
								onclick="$('[rows-{{ $section->id }}=1]').toggle();$('[iconrows-{{ $section->id }}=1]').toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');">
								<i iconrows-{{ $section->id }}="1" class="fa fa-chevron-up"></i>
								{{ $section->id ?? '' }}
							</div>
						</td>
						<td>
							{{ $section->title ?? '' }}
						</td>
						<td>
							{{ $section->sortorder ?? '' }}
						</td>
						<td>
							{{ $section->page->title ?? '' }}
						</td>
						<td>
							{{ $section->template->title ?? '' }}
						</td>
						<td>
							{{ App\Models\Section::PUBLISHED_RADIO[$section->published] ?? '' }}
						</td>
						<td style="white-space:nowrap;">
							{{-- @can('section_show')
							<a class="btn btn-xs btn-primary" href="{{ route('admin.sections.show', $section->id) }}">
								{{ trans('global.view') }}
							</a>
							@endcan
							--}}
							@can('section_edit')
							<a title="{{ trans('global.edit') }}" class="btn btn-xs btn-info"
								href="{{ route('admin.sections.edit', $section->id) }}">
								<i class="fa fa-edit"></i>
							</a>
							@endcan

							@can('section_create')
							<a title="Duplicate Section" class="btn btn-xs btn-warning"
								href="{{ route('admin.sections.duplicate', $section->id) }}">
								<i class="fa fa-copy"></i>
							</a>
							@endcan
							@can('section_delete')
							<form action="{{ route('admin.sections.destroy', $section->id) }}" method="POST"
								onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								{{-- <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}"> --}}
								<button title="{{ trans('global.delete') }}" type="submit" class="btn btn-xs btn-danger"><i
										class="fa fa-trash"></i></button>
							</form>
							@endcan

						</td>

					</tr>
					@if($section->sectionSections)
					@foreach($section->sectionSections as $key1 => $subsection)

					<tr rows-{{ $section->id }}="1" data-entry-id="{{ $subsection->id }}" class="small">

						<td>
							→ {{ $subsection->id ?? '' }}
						</td>
						<td>
							{{ $subsection->title ?? '' }}
						</td>
						<td>
							{{ $subsection->sortorder ?? '' }}
						</td>
						<td>
							{{ $subsection->page->title ?? '' }}
						</td>
						<td>
							{{ $subsection->template->title ?? '' }}
						</td>
						<td>
							{{ App\Models\Section::PUBLISHED_RADIO[$subsection->published] ?? '' }}
						</td>
						<td style="white-space:nowrap;
								padding-left: 15px;">
							{{-- @can('section_show')
							<a class="btn btn-xs btn-primary" href="{{ route('admin.sections.show', $subsection->id) }}">
								{{ trans('global.view') }}
							</a>
							@endcan --}}

							@can('section_edit')
							<a title="{{ trans('global.edit') }}" class="btn btn-xs btn-info"
								href="{{ route('admin.sections.edit', $subsection->id) }}">

								<i class="fa fa-edit"></i>
							</a>
							@endcan

							@can('section_create')
							<a title="Duplicate Section" class="btn btn-xs btn-warning"
								href="{{ route('admin.sections.duplicate', $subsection->id) }}">
								<i class="fa fa-copy"></i>
							</a>
							@endcan
							@can('section_delete')
							<form action="{{ route('admin.sections.destroy', $subsection->id) }}" method="POST"
								onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								{{-- <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}"> --}}
								<button title="{{ trans('global.delete') }}" type="submit" class="btn btn-xs btn-danger"><i
										class="fa fa-trash"></i></button>
							</form>
							@endcan

						</td>

					</tr>
					@if($subsection->sectionSections)
					@foreach($subsection->sectionSections as $key1 => $subsubsection)

					<tr rows-{{ $section->id }}="1" data-entry-id="{{ $subsubsection->id }}" class="x-small">

						<td style="white-space:nowrap;">
							→ {{ $subsubsection->id ?? '' }}
						</td>
						<td>
							{{ $subsubsection->title ?? '' }}
						</td>
						<td>
							{{ $subsubsection->sortorder ?? '' }}
						</td>
						<td>
							{{ $subsubsection->page->title ?? '' }}
						</td>
						<td>
							{{ $subsubsection->template->title ?? '' }}
						</td>
						<td>
							{{ App\Models\Section::PUBLISHED_RADIO[$subsubsection->published] ?? '' }}
						</td>
						<td style="white-space:nowrap;
								padding-left: 15px;">
							{{-- @can('section_show')
							<a class="btn btn-xs btn-primary" href="{{ route('admin.sections.show', $subsubsection->id) }}">
								{{ trans('global.view') }}
							</a>
							@endcan --}}

							@can('section_edit')
							<a title="{{ trans('global.edit') }}" class="btn btn-xs btn-info"
								href="{{ route('admin.sections.edit', $subsubsection->id) }}">

								<i class="fa fa-edit"></i>
							</a>
							@endcan

							@can('section_create')
							<a title="Duplicate Section" class="btn btn-xs btn-warning"
								href="{{ route('admin.sections.duplicate', $subsubsection->id) }}">
								<i class="fa fa-copy"></i>
							</a>
							@endcan
							@can('section_delete')
							<form action="{{ route('admin.sections.destroy', $subsubsection->id) }}" method="POST"
								onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								{{-- <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}"> --}}
								<button title="{{ trans('global.delete') }}" type="submit" class="btn btn-xs btn-danger"><i
										class="fa fa-trash"></i></button>
							</form>
							@endcan

						</td>

					</tr>
					@endforeach
					@endif
					@endforeach
					@endif
					@endif
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@section('scripts')
@parent
<script>
	$(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('section_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.sections.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-pageSections:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection