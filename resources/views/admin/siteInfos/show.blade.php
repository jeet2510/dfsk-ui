@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.siteInfo.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.site-infos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.siteInfo.fields.id') }}
                        </th>
                        <td>
                            {{ $siteInfo->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteInfo.fields.site_title') }}
                        </th>
                        <td>
                            {{ $siteInfo->site_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteInfo.fields.site_favicon') }}
                        </th>
                        <td>
                            @if($siteInfo->site_favicon)
                                <a href="{{ $siteInfo->site_favicon->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $siteInfo->site_favicon->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteInfo.fields.header_logo_primary') }}
                        </th>
                        <td>
                            @if($siteInfo->header_logo_primary)
                                <a href="{{ $siteInfo->header_logo_primary->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $siteInfo->header_logo_primary->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteInfo.fields.header_logo_secondary') }}
                        </th>
                        <td>
                            @if($siteInfo->header_logo_secondary)
                                <a href="{{ $siteInfo->header_logo_secondary->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $siteInfo->header_logo_secondary->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteInfo.fields.footer_logo') }}
                        </th>
                        <td>
                            @if($siteInfo->footer_logo)
                                <a href="{{ $siteInfo->footer_logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $siteInfo->footer_logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.site-infos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection