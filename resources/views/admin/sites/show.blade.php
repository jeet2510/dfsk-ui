@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.site.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sites.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.site.fields.id') }}
                        </th>
                        <td>
                            {{ $site->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.site.fields.title') }}
                        </th>
                        <td>
                            {{ $site->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.site.fields.language_code') }}
                        </th>
                        <td>
                            {{ $site->language_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.site.fields.url') }}
                        </th>
                        <td>
                            {{ $site->url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.site.fields.isdefault') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $site->isdefault ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sites.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#site_pages" role="tab" data-toggle="tab">
                {{ trans('cruds.page.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#site_site_infos" role="tab" data-toggle="tab">
                {{ trans('cruds.siteInfo.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#site_dropdowns" role="tab" data-toggle="tab">
                {{ trans('cruds.dropdown.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#site_config_values" role="tab" data-toggle="tab">
                {{ trans('cruds.configValue.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="site_pages">
            @includeIf('admin.sites.relationships.sitePages', ['pages' => $site->sitePages])
        </div>
        <div class="tab-pane" role="tabpanel" id="site_site_infos">
            @includeIf('admin.sites.relationships.siteSiteInfos', ['siteInfos' => $site->siteSiteInfos])
        </div>
        <div class="tab-pane" role="tabpanel" id="site_dropdowns">
            @includeIf('admin.sites.relationships.siteDropdowns', ['dropdowns' => $site->siteDropdowns])
        </div>
        <div class="tab-pane" role="tabpanel" id="site_config_values">
            @includeIf('admin.sites.relationships.siteConfigValues', ['configValues' => $site->siteConfigValues])
        </div>
    </div>
</div>

@endsection