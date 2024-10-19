<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPageRequest;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Page;
use App\Models\Site;
use App\Models\Section;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;
class PageController extends Controller
{
	public function index()
	{
		abort_if(Gate::denies('page_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pages = Page::with(['site', 'page'])->get();

		return view('admin.pages.index', compact('pages'));
	}

	public function create()
	{
		abort_if(Gate::denies('page_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sites = Site::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $pages = Page::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

		return view('admin.pages.create', compact('pages','sites'));
	}

	public function store(StorePageRequest $request)
	{
		$page = Page::create($request->all());

		return redirect()->route('admin.pages.index');
	}

	public function edit(Page $page)
	{
		abort_if(Gate::denies('page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sites = Site::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $pages = Page::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $page->load('site','pages');

		return view('admin.pages.edit', compact('page','sites','pages'));
	}

	public function update(UpdatePageRequest $request, Page $page)
	{
		$page->update($request->all());

		return redirect()->route('admin.pages.index');
	}

	public function show(Page $page)
	{
		abort_if(Gate::denies('page_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
		$page->load(['site','page', 'pages', 'pageSections' => function ($query) {
			$query->orderBy('sortorder', 'asc');
		}]);
		return view('admin.pages.show', compact('page'));
	}

	public function destroy(Page $page)
	{
		abort_if(Gate::denies('page_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
		// foreach ($page->sectionSections as $section) {
		// 	foreach ($section->sectionSections as $subsection) {
		// 		$subsection->delete();
		// 	}
		// 	$section->delete();
		// }
		$page->delete();
		return back();
	}

	public function massDestroy(MassDestroyPageRequest $request)
	{
		$pages = Page::find(request('ids'));
		foreach ($pages as $page) {
			// foreach ($page->sectionSections as $section) {
			// 	foreach ($section->sectionSections as $subsection) {
			// 		$subsection->delete();
			// 	}
			// 	$section->delete();
			// }
			$page->delete();
		}

		return response(null, Response::HTTP_NO_CONTENT);
	}
	// Functions created by me
	// Assuming you have a model called "Item" representing the item you want to duplicate


	public function duplicate(Page $page)
	{
		$time = time();
		$newItem = $page->replicate();
		$newItem->title = $page->title . ' ' . $time;
		$newItem->slug = $page->slug . '-' . $time;
		$newItem->save();
		// Duplicate related models or relationships
		foreach ($page->pageSections->where('section_id', null) as $section) {
			// Copy the first Level Sections
			$newSection = $section->replicate();
			$newSection->page_id = $newItem->id;
			$newItem->pageSections()->save($newSection);
			//!!!!!! we need to duplicate the value also
			$newvalue = $section->values[0]->replicate();
			$newvalue->section_id = $newSection->id;
			$newvalue->save();
			// we need to copy the media of this value
			if (count($section->values[0]->images) > 0) {
				foreach ($section->values[0]->images as $media) {
					if(Storage::exists($media->getPath()))
						$newvalue->addMedia($media->getPath())->toMediaCollection('images');
				}
			}
			// Copy the 2nd level sections
			foreach ($section->sectionSections as $subsection) {
				$newSubSection = $subsection->replicate();
				$newSubSection->section_id = $newSection->id;
				$newSubSection->page_id = $newItem->id;
				$newItem->pageSections()->save($newSubSection);
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
		}
		return redirect()->route('admin.pages.index');
	}
}
