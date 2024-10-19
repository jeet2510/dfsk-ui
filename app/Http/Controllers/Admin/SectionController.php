<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySectionRequest;
use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\UpdateSectionRequest;
use App\Http\Requests\StoreValueRequest;
use App\Http\Requests\UpdateValueRequest;
use App\Models\ChangeLog;
use App\Models\Page;
use App\Models\Section;
use App\Models\Value;
use App\Models\Template;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;

class SectionController extends Controller
{
	public function index()
	{
		abort_if(Gate::denies('section_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

		$sections = Section::where('section_id', null)->with(['page', 'template', 'sectionSections'])->orderBy('sortorder', 'asc')->get();
		return view('admin.sections.index', compact('sections'));
	}

	public function create(Request $request)
	{
		abort_if(Gate::denies('section_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

		$pages = Page::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

		$templates = Template::orderBy('title', 'asc')->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');
		$pageid = $request->query('pageid');
		if ($pageid != null && $pageid > 0)
			$sections = Section::where('page_id', $pageid)->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');
		else
			$sections = Section::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');
		return view('admin.sections.create', compact('pages', 'sections', 'templates'));
	}

	public function store(StoreSectionRequest $request)
	{
		$section = Section::create($request->all());
		// I need to also create an empty Value for this section so we can fill it
		$value = new Value();
		$value->section_id = $section->id;
		$value->published = 1;
		$value->save();
		$pages = Page::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');
		$templates = Template::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');
		$sections = Section::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');
		$section->load('page', 'template', 'section');
		return view('admin.sections.edit', compact('pages', 'section', 'sections', 'templates'));
	}

	public function edit(Section $section)
	{
		abort_if(Gate::denies('section_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

		$pages = Page::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

		$templates = Template::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');
		if ($section->section_id != null || $section->section_id > 0)
			$sections = Section::where([ 'page_id' => $section->page_id])->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');
		else
			$sections = Section::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');
		$section->load('page', 'template', 'section');
		return view('admin.sections.edit', compact('pages', 'section', 'sections', 'templates'));
	}

	public function update(UpdateSectionRequest $request, Section $section,	UpdateValueRequest $vrequest)
	{
		$value = $section->values[0];
		$section->update($request->all());
		//! We need to take into consideration here, if the Parent section
		//! page was changed, this should be applicable to the children as well
		foreach ($section->sectionSections as $subsection) {
			$subsection->page_id = $section->page_id;
			$subsection->save();
		}

		// we also need to store the value	
		$vrequest->merge([
			'section_id' => $vrequest->value_section_id,
		]);
		$value->update($vrequest->all());
		// delete all previous files
		if (count($value->images) > 0) {
			foreach ($value->images as $media) {
				if (!in_array($media->file_name, $request->input('images', []))) {
					$media->delete();
				}
			}
		}
		$media = $value->images->pluck('file_name')->toArray();
		foreach ($request->input('images', []) as $file) {
			if (count($media) === 0 || !in_array($file, $media)) {
				$value->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('images');
			}
		}
		if (count($value->files) > 0) {
			foreach ($value->files as $media) {
				if (!in_array($media->file_name, $request->input('files', []))) {
					$media->delete();
				}
			}
		}
		$media = $value->files->pluck('file_name')->toArray();
		foreach ($request->input('files', []) as $file) {
			if (count($media) === 0 || !in_array($file, $media)) {
				$value->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('files');
			}
		}
		// Add Logs		
		$changeInfos = "";
		foreach ($section->getChanges() as $attribute => $vs) {
			if ($attribute != "updated_at") {
				$changeInfo = "• <b>{$attribute}</b> changed to <em>{$vs}</em>.<br>";
				$changeInfos = $changeInfos . " " . $changeInfo;
			}
		}
		foreach ($value->getChanges() as $attribute => $vv) {
			if ($attribute != "updated_at") {
				$changeInfo = "• <b>{$attribute}</b> changed to <em>{$vv}</em>.<br>";
				$changeInfos = $changeInfos . " " . $changeInfo;
			}
		}
		$log = new ChangeLog();
		$log->user_id = $request->user()->id;
		$log->page_id = $section->page_id;
		$log->section_id = $section->id;
		$log->change_to = $changeInfos;
		$log->save();
		$page = $section->page()->first();
		$page->load(['pageSections' => function ($query) {
			$query->orderBy('sortorder', 'asc');
		}]);
		return view('admin.pages.show', compact('page'));
	}


	public function show(Section $section)
	{
		abort_if(Gate::denies('section_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

		$section->load('page', 'template', 'section', 'sectionSections');

		return view('admin.sections.show', compact('section'));
	}

	public function destroy(Section $section)
	{
		abort_if(Gate::denies('section_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
		foreach ($section->sectionSections as $subsection) {
			$subsection->delete();
		}
		$section->delete();
		return back();
	}

	public function massDestroy(MassDestroySectionRequest $request)
	{
		$sections = Section::find(request('ids'));

		foreach ($sections as $section) {
			$section->delete();
		}

		return response(null, Response::HTTP_NO_CONTENT);
	}
	public function duplicate(Section $section)
	{
	//	dd($section->values[0]->getMedia('images')[0]->getPath());
		$time = time();
		$newSection = $section->replicate();
		$newSection->title = $section->title . '-' . $time;
		$newSection->save();
		//!!!!!! we need to duplicate the value also
		$newvalue = $section->values[0]->replicate();
		$newvalue->section_id = $newSection->id;
		$newvalue->save();
		// we need to copy the media of this value
		if (count($section->values[0]->images) > 0) {
			foreach ($section->values[0]->images as $media) {
				if(Storage::exists($media->getPath()))
				$newvalue->addMedia( $media->getPath())->toMediaCollection('images');
			}
		}
		// Copy the 2nd level sections
		foreach ($section->sectionSections as $subsection) {
			$newSubSection = $subsection->replicate();
			$newSubSection->section_id = $newSection->id;
			$newSubSection->save();
			//!!!!!! we need to duplicate the value also
			$newsubvalue = $subsection->values[0]->replicate();
			$newsubvalue->section_id = $newSubSection->id;
			$newsubvalue->save();
			// we need to copy the media of this value
			if (count($subsection->values[0]->images) > 0) {
				foreach ($subsection->values[0]->images as $media) {
					if(Storage::exists($media->getPath()))
						$newsubvalue->addMedia($media->getPath())->toMediaCollection('images');
				}
			}
		}
		$page = $section->page()->first();
		return view('admin.pages.show', compact('page'));
	}
}
