@extends('layouts.admin')
@section('content')
@can('site_info_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.site-infos.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.siteInfo.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.siteInfo.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-SiteInfo">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.siteInfo.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.siteInfo.fields.site_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.siteInfo.fields.site_favicon') }}
                        </th>
                        <th>
                            {{ trans('cruds.siteInfo.fields.header_logo_primary') }}
                        </th>
                        <th>
                            {{ trans('cruds.siteInfo.fields.header_logo_secondary') }}
                        </th>
                        <th>
                            {{ trans('cruds.siteInfo.fields.footer_logo') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siteInfos as $key => $siteInfo)
                        <tr data-entry-id="{{ $siteInfo->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $siteInfo->id ?? '' }}
                            </td>
                            <td>
                                {{ $siteInfo->site_title ?? '' }}
                            </td>
                            <td>
                                @if($siteInfo->site_favicon)
                                    <a href="{{ $siteInfo->site_favicon->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $siteInfo->site_favicon->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if($siteInfo->header_logo_primary)
                                    <a href="{{ $siteInfo->header_logo_primary->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $siteInfo->header_logo_primary->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if($siteInfo->header_logo_secondary)
                                    <a href="{{ $siteInfo->header_logo_secondary->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $siteInfo->header_logo_secondary->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if($siteInfo->footer_logo)
                                    <a href="{{ $siteInfo->footer_logo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $siteInfo->footer_logo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('site_info_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.site-infos.show', $siteInfo->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('site_info_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.site-infos.edit', $siteInfo->id) }}">
                                        {{ trans('global.edit') }}
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
  let table = $('.datatable-SiteInfo:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection