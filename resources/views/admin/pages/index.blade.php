@extends('layouts.admin')
@section('content')
@can('page_create')
<div style="margin-bottom: 10px;" class="row">
	<div class="col-lg-12">
		<a class="btn btn-success" href="{{ route('admin.pages.create') }}">
			{{ trans('global.add') }} {{ trans('cruds.page.title_singular') }}
		</a>
	</div>
</div>
@endcan
<div class="card">
	<div class="card-header">
		{{ trans('cruds.page.title_singular') }} {{ trans('global.list') }}
	</div>

	<div class="card-body">
		<div class="table-responsive">
			<table class=" table table-bordered table-striped table-hover datatable datatable-Page">
				<thead>
					<tr>
						<th width="10">

						</th>
						<th>
							{{ trans('cruds.page.fields.id') }}
						</th>
						<th>
							{{ trans('cruds.page.fields.site') }}
						</th>
						<th>
							{{ trans('cruds.page.fields.commonname') }}
						</th>
						<th>
							{{ trans('cruds.page.fields.title') }}
						</th>
						<th>
							{{ trans('cruds.page.fields.slug') }}
						</th>
						<th>
							{{ trans('cruds.page.fields.sortorder') }}
						</th>
						<th>
								{{ trans('cruds.page.fields.is_page') }}
						</th>
						<th>
								{{ trans('cruds.page.fields.page') }}
						</th>
						<th>
							{{ trans('cruds.page.fields.showinheader') }}
						</th>
						<th>
							{{ trans('cruds.page.fields.showinfooter') }}
						</th>
						<th>
							{{ trans('cruds.page.fields.published') }}
						</th>

						<th>
							{{ trans('cruds.page.fields.metatitle') }}
						</th>
						<th>
							{{ trans('cruds.page.fields.metadescription') }}
						</th>
						<th>
							{{ trans('cruds.page.fields.metakeywords') }}
						</th>
						<th style="text-align:center;">
							Actions
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pages as $key => $page)
					<tr data-entry-id="{{ $page->id }}">
						<td>

						</td>
						<td>
							{{ $page->id ?? '' }}
						</td>
						<td>
							{{ $page->site->title ?? '' }}
						</td>
						<td>
							{{ $page->commonname ?? '' }}
						</td>
						<td>
							{{ $page->title ?? '' }}
						</td>
						<td>
							{{ $page->slug ?? '' }}
						</td>
						<td>
							{{ $page->sortorder ?? '' }}
						</td>
						<td>
								{{ $page->page_url ?? '' }}
						</td>
						<td>
								{{ App\Models\Page::PUBLISHED_RADIO[$page->published] ?? '' }}
						</td>
						<td>
							{{ App\Models\Page::SHOWINHEADER_RADIO[$page->showinheader] ?? '' }}
						</td>
						<td>
							{{ App\Models\Page::SHOWINFOOTER_RADIO[$page->showinfooter] ?? '' }}
						</td>
						<td>
							{{ App\Models\Page::PUBLISHED_RADIO[$page->published] ?? '' }}
						</td>
						<td>
							{{ $page->metatitle ?? '' }}
						</td>
						<td>
							{{ $page->metadescription ?? '' }}
						</td>
						<td>
							{{ $page->metakeywords ?? '' }}
						</td>
						<td style="white-space:nowrap;">
							<a title="View Page" target="_blank" class="btn btn-xs btn-success"
								href="{{ route('page', ['slug' => $page->slug]) }}">
								<i class="fa fa-eye"></i>

							</a>
							@can('page_show')
							<a title="Edit Sections" class="btn btn-xs btn-primary" href="{{ route('admin.pages.show', $page->id) }}">
								<i class="fa fa-edit"></i><i class="fa fa-list-alt"></i>

							</a>
							@endcan

							@can('page_edit')
							<a title="Edit Page Info" class="btn btn-xs btn-info" href="{{ route('admin.pages.edit', $page->id) }}">
								<i class="fa fa-edit"></i><i class="fa fa-info"></i>

							</a>
							@endcan
							@can('page_create')
							<a title="Duplicate Page" class="btn btn-xs btn-warning"
								href="{{ route('admin.pages.duplicate', $page->id) }}">
								<i class="fa fa-copy"></i>
							</a>
							@endcan
							@can('page_delete')
							<form title="{{ trans('global.delete') }}" action="{{ route('admin.pages.destroy', $page->id) }}"
								method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
								style="display: inline-block;">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" class="btn btn-xs btn-danger">
									<i class="fa fa-trash"></i>
								</button>
								{{-- <input type="submit" class="btn btn-xs btn-danger" value=""> --}}
							</form>
							@endcan

						</td>

					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>



@endsection
@section('scripts')
@parent
<script>
	$(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('page_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.pages.massDestroy') }}",
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
    order: [[ 4, 'asc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Page:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection