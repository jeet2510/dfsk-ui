@can('change_log_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.change-logs.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.changeLog.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.changeLog.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-userChangeLogs">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.changeLog.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.changeLog.fields.user') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.changeLog.fields.page') }}
                        </th>
                        <th>
                            {{ trans('cruds.page.fields.slug') }}
                        </th>
                        <th>
                            {{ trans('cruds.changeLog.fields.section') }}
                        </th>
                        <th>
                            {{ trans('cruds.changeLog.fields.value') }}
                        </th>
                        <th>
                            {{ trans('cruds.changeLog.fields.change_from') }}
                        </th>
                        <th>
                            {{ trans('cruds.changeLog.fields.change_to') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($changeLogs as $key => $changeLog)
                        <tr data-entry-id="{{ $changeLog->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $changeLog->id ?? '' }}
                            </td>
                            <td>
                                {{ $changeLog->user->name ?? '' }}
                            </td>
                            <td>
                                {{ $changeLog->user->email ?? '' }}
                            </td>
                            <td>
                                {{ $changeLog->page->title ?? '' }}
                            </td>
                            <td>
                                {{ $changeLog->page->slug ?? '' }}
                            </td>
                            <td>
                                {{ $changeLog->section->title ?? '' }}
                            </td>
                            <td>
                                {{ $changeLog->value->title_1 ?? '' }}
                            </td>
                            <td>
                                {{ $changeLog->change_from ?? '' }}
                            </td>
                            <td>
                                {{ $changeLog->change_to ?? '' }}
                            </td>
                            <td>
                                @can('change_log_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.change-logs.show', $changeLog->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('change_log_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.change-logs.edit', $changeLog->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('change_log_delete')
                                    <form action="{{ route('admin.change-logs.destroy', $changeLog->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
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

@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('change_log_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.change-logs.massDestroy') }}",
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
  let table = $('.datatable-userChangeLogs:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection