<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyValueRequest;
use App\Http\Requests\StoreValueRequest;
use App\Http\Requests\UpdateValueRequest;
use App\Models\Section;
use App\Models\Value;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ValueController extends Controller
{
	use MediaUploadingTrait;

	public function index()
	{
		abort_if(Gate::denies('value_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

		$values = Value::with(['section', 'media'])->get();

		return view('admin.values.index', compact('values'));
	}

	public function create()
	{
		abort_if(Gate::denies('value_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

		$sections = Section::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

		return view('admin.values.create', compact('sections'));
	}

	public function store(StoreValueRequest $request)
	{
		$value = Value::create($request->all());

		foreach ($request->input('images', []) as $file) {
			$value->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('images');
		}

		foreach ($request->input('files', []) as $file) {
			$value->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('files');
		}

		if ($media = $request->input('ck-media', false)) {
			Media::whereIn('id', $media)->update(['model_id' => $value->id]);
		}

		return redirect()->route('admin.values.index');
	}

	public function edit(Value $value)
	{
		abort_if(Gate::denies('value_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

		$sections = Section::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

		$value->load('section');

		return view('admin.values.edit', compact('sections', 'value'));
	}

	public function update(UpdateValueRequest $request, Value $value)
	{
		$request->merge([
			'section_id' => $request->value_section_id,
		]);
		$value->update($request->all());

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

		//dd($value->images,$media,$request->input('images', []));
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

		return redirect()->route('admin.values.index');
	}

	public function show(Value $value)
	{
		abort_if(Gate::denies('value_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

		$value->load('section');

		return view('admin.values.show', compact('value'));
	}

	public function destroy(Value $value)
	{
		abort_if(Gate::denies('value_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

		$value->delete();

		return back();
	}

	public function massDestroy(MassDestroyValueRequest $request)
	{
		$values = Value::find(request('ids'));

		foreach ($values as $value) {
			$value->delete();
		}

		return response(null, Response::HTTP_NO_CONTENT);
	}

	public function storeCKEditorImages(Request $request)
	{
		abort_if(Gate::denies('value_create') && Gate::denies('value_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

		$model         = new Value();
		$model->id     = $request->input('crud_id', 0);
		$model->exists = true;
		$media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

		return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
	}
}
