@can('config_value_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.config-values.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.configValue.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.configValue.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-siteConfigValues">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.configValue.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.configValue.fields.site') }}
                        </th>
                        <th>
                            {{ trans('cruds.configValue.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.configValue.fields.value') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($configValues as $key => $configValue)
                        <tr data-entry-id="{{ $configValue->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $configValue->id ?? '' }}
                            </td>
                            <td>
                                {{ $configValue->site->title ?? '' }}
                            </td>
                            <td>
                                {{ $configValue->name ?? '' }}
                            </td>
                            <td>
                                {{ $configValue->value ?? '' }}
                            </td>
                            <td>
                                @can('config_value_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.config-values.show', $configValue->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('config_value_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.config-values.edit', $configValue->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('config_value_delete')
                                    <form action="{{ route('admin.config-values.destroy', $configValue->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('config_value_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.config-values.massDestroy') }}",
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
  let table = $('.datatable-siteConfigValues:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection