@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.section.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sections.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.section.fields.id') }}
                        </th>
                        <td>
                            {{ $section->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.section.fields.title') }}
                        </th>
                        <td>
                            {{ $section->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.section.fields.sortorder') }}
                        </th>
                        <td>
                            {{ $section->sortorder }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.section.fields.page') }}
                        </th>
                        <td>
                            {{ $section->page->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.section.fields.template') }}
                        </th>
                        <td>
                            {{ $section->template->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.section.fields.section') }}
                        </th>
                        <td>
                            {{ $section->section->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.section.fields.published') }}
                        </th>
                        <td>
                            {{ App\Models\Section::PUBLISHED_RADIO[$section->published] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2" class="text-value-lg" style="border-top-width:2px;">
                            VALUES
                        </th>
                    </tr>
										
                    <tr>
											<th>
													{{ trans('cruds.value.fields.title_1') }}
											</th>
											<td>
													{{ $section->values[0]->title_1 }}
											</td>
									</tr>
									<tr>
											<th>
													{{ trans('cruds.value.fields.title_2') }}
											</th>
											<td>
													{{ $section->values[0]->title_2 }}
											</td>
									</tr>
									<tr>
											<th>
													{{ trans('cruds.value.fields.title_3') }}
											</th>
											<td>
													{{ $section->values[0]->title_3 }}
											</td>
									</tr>
									<tr>
											<th>
													{{ trans('cruds.value.fields.text_1') }}
											</th>
											<td>
													{!! $section->values[0]->text_1 !!}
											</td>
									</tr>
									<tr>
											<th>
													{{ trans('cruds.value.fields.text_2') }}
											</th>
											<td>
													{!! $section->values[0]->text_2 !!}
											</td>
									</tr>
									<tr>
											<th>
													{{ trans('cruds.value.fields.text_3') }}
											</th>
											<td>
													{!! $section->values[0]->text_3 !!}
											</td>
									</tr>
									<tr>
											<th>
													{{ trans('cruds.value.fields.link_1') }}
											</th>
											<td>
													{{ $section->values[0]->link_1 }}
											</td>
									</tr>
									<tr>
											<th>
													{{ trans('cruds.value.fields.link_2') }}
											</th>
											<td>
													{{ $section->values[0]->link_2 }}
											</td>
									</tr>
									<tr>
											<th>
													{{ trans('cruds.value.fields.link_3') }}
											</th>
											<td>
													{{ $section->values[0]->link_3 }}
											</td>
									</tr>
									<tr>
											<th>
													{{ trans('cruds.value.fields.images') }}
											</th>
											<td>
													@foreach($section->values[0]->images as $key => $media)
															<a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
																	<img src="{{ $media->getUrl('thumb') }}">
															</a>
													@endforeach
											</td>
									</tr>
									<tr>
											<th>
													{{ trans('cruds.value.fields.files') }}
											</th>
											<td>
													@foreach($section->values[0]->files as $key => $media)
															<a href="{{ $media->getUrl() }}" target="_blank">
																	{{ trans('global.view_file') }}
															</a>
													@endforeach
											</td>
									</tr>

									
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sections.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

{{-- <div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#section_sections" role="tab" data-toggle="tab">
                {{ trans('cruds.section.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="section_sections">
            @includeIf('admin.sections.relationships.sectionSections', ['sections' => $section->sectionSections])
        </div>
    </div>
</div> --}}

@endsection