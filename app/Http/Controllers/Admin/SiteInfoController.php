<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreSiteInfoRequest;
use App\Http\Requests\UpdateSiteInfoRequest;
use App\Models\SiteInfo;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SiteInfoController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('site_info_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $siteInfos = SiteInfo::with(['media'])->get();

        return view('admin.siteInfos.index', compact('siteInfos'));
    }

    public function create()
    {
        abort_if(Gate::denies('site_info_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.siteInfos.create');
    }

    public function store(StoreSiteInfoRequest $request)
    {
        $siteInfo = SiteInfo::create($request->all());

        if ($request->input('site_favicon', false)) {
            $siteInfo->addMedia(storage_path('tmp/uploads/' . basename($request->input('site_favicon'))))->toMediaCollection('site_favicon');
        }

        if ($request->input('header_logo_primary', false)) {
            $siteInfo->addMedia(storage_path('tmp/uploads/' . basename($request->input('header_logo_primary'))))->toMediaCollection('header_logo_primary');
        }

        if ($request->input('header_logo_secondary', false)) {
            $siteInfo->addMedia(storage_path('tmp/uploads/' . basename($request->input('header_logo_secondary'))))->toMediaCollection('header_logo_secondary');
        }

        if ($request->input('footer_logo', false)) {
            $siteInfo->addMedia(storage_path('tmp/uploads/' . basename($request->input('footer_logo'))))->toMediaCollection('footer_logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $siteInfo->id]);
        }

        return redirect()->route('admin.site-infos.index');
    }

    public function edit(SiteInfo $siteInfo)
    {
        abort_if(Gate::denies('site_info_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.siteInfos.edit', compact('siteInfo'));
    }

    public function update(UpdateSiteInfoRequest $request, SiteInfo $siteInfo)
    {
        $siteInfo->update($request->all());

        if ($request->input('site_favicon', false)) {
            if (! $siteInfo->site_favicon || $request->input('site_favicon') !== $siteInfo->site_favicon->file_name) {
                if ($siteInfo->site_favicon) {
                    $siteInfo->site_favicon->delete();
                }
                $siteInfo->addMedia(storage_path('tmp/uploads/' . basename($request->input('site_favicon'))))->toMediaCollection('site_favicon');
            }
        } elseif ($siteInfo->site_favicon) {
            $siteInfo->site_favicon->delete();
        }

        if ($request->input('header_logo_primary', false)) {
            if (! $siteInfo->header_logo_primary || $request->input('header_logo_primary') !== $siteInfo->header_logo_primary->file_name) {
                if ($siteInfo->header_logo_primary) {
                    $siteInfo->header_logo_primary->delete();
                }
                $siteInfo->addMedia(storage_path('tmp/uploads/' . basename($request->input('header_logo_primary'))))->toMediaCollection('header_logo_primary');
            }
        } elseif ($siteInfo->header_logo_primary) {
            $siteInfo->header_logo_primary->delete();
        }

        if ($request->input('header_logo_secondary', false)) {
            if (! $siteInfo->header_logo_secondary || $request->input('header_logo_secondary') !== $siteInfo->header_logo_secondary->file_name) {
                if ($siteInfo->header_logo_secondary) {
                    $siteInfo->header_logo_secondary->delete();
                }
                $siteInfo->addMedia(storage_path('tmp/uploads/' . basename($request->input('header_logo_secondary'))))->toMediaCollection('header_logo_secondary');
            }
        } elseif ($siteInfo->header_logo_secondary) {
            $siteInfo->header_logo_secondary->delete();
        }

        if ($request->input('footer_logo', false)) {
            if (! $siteInfo->footer_logo || $request->input('footer_logo') !== $siteInfo->footer_logo->file_name) {
                if ($siteInfo->footer_logo) {
                    $siteInfo->footer_logo->delete();
                }
                $siteInfo->addMedia(storage_path('tmp/uploads/' . basename($request->input('footer_logo'))))->toMediaCollection('footer_logo');
            }
        } elseif ($siteInfo->footer_logo) {
            $siteInfo->footer_logo->delete();
        }

        return redirect()->route('admin.site-infos.index');
    }

    public function show(SiteInfo $siteInfo)
    {
        abort_if(Gate::denies('site_info_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.siteInfos.show', compact('siteInfo'));
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('site_info_create') && Gate::denies('site_info_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new SiteInfo();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
