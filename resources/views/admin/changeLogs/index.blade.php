@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.changeLog.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ChangeLog">
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
                            {{ trans('cruds.changeLog.fields.page') }}
                        </th>
                        <th>
                            {{ trans('cruds.changeLog.fields.section') }}
                        </th>
                       
                        <th>
                            {{ trans('cruds.changeLog.fields.change_to') }}
                        </th>
                        <th>
                             On
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
                                {{ $changeLog->page->title ?? '' }}
                            </td>
                            <td>
                                {{ $changeLog->section->title ?? '' }}
                            </td>
                            <td>
															<div style="max-height:90px;overflow-y:auto;">
                                {!! $changeLog->change_to ?? '' !!}
															</div>
                            </td>
                            <td>
                                {{ $changeLog->created_at ?? '' }}
                            </td>
                            <td>
                                @can('change_log_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.change-logs.show', $changeLog->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
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
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-ChangeLog:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection