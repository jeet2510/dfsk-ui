@extends('layouts.admin')
@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-md-8">
				<h2 class="">
					{{ trans('global.edit') }} - {{ $page->title}}</h2>
			</div>
			<div class="col-md-4">
				<div class="form-group text-right">
					<a class="btn btn-danger ml-auto mr-0" href="{{ route('admin.pages.index') }}">
						{{ trans('global.back_to_list') }}
					</a>
				</div>
			</div>
		</div>

	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-9">
				<div class="card">
					@includeIf('admin.pages.relationships.pageSections', ['sections' => $page->pageSections,'pageid'=>$page->id])
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<table class="table table-bordered table-striped pagesInfoTable">
						<tbody>
							<tr>
								<th>
									{{ trans('cruds.page.fields.id') }}
								</th>
								<td>
									{{ $page->id }}
								</td>
							</tr>

							<tr>
								<th>
									{{ trans('cruds.page.fields.site') }}
								</th>
								<td>
									{{ $page->site->title ?? '' }}
								</td>
							</tr>
							<tr>
								<th>
									{{ trans('cruds.page.fields.commonname') }}
								</th>
								<td>
									{{ $page->commonname }}
								</td>
							</tr>
							<tr>
								<th>
									{{ trans('cruds.page.fields.title') }}
								</th>
								<td>
									{{ $page->title }}
								</td>
							</tr>
							<tr>
								<th>
									{{ trans('cruds.page.fields.slug') }}
								</th>
								<td>
									{{ $page->slug }}
								</td>
							</tr>
							<tr>
								<th>
									{{ trans('cruds.page.fields.sortorder') }}
								</th>
								<td>
									{{ $page->sortorder }}
								</td>
							</tr>
							<tr>
								<th>
									{{ trans('cruds.page.fields.is_page') }}
								</th>
								<td>
									<input type="checkbox" disabled="disabled" {{ $page->is_page ? 'checked' : '' }}>
								</td>
							</tr>
							<tr>
								<th>
									{{ trans('cruds.page.fields.page') }}
								</th>
								<td>
									{{ $page->page->title ?? '' }}
								</td>
							</tr>
							<tr>
								<th>
									{{ trans('cruds.page.fields.showinheader') }}
								</th>
								<td>
									{{ App\Models\Page::SHOWINHEADER_RADIO[$page->showinheader] ?? '' }}
								</td>
							</tr>
							<tr>
								<th>
									{{ trans('cruds.page.fields.showinfooter') }}
								</th>
								<td>
									{{ App\Models\Page::SHOWINFOOTER_RADIO[$page->showinfooter] ?? '' }}
								</td>
							</tr>
							<tr>
								<th>
									{{ trans('cruds.page.fields.page_url') }}
								</th>
								<td>
									{{ $page->page_url }}
								</td>
							</tr>
							<tr>
								<th>
									{{ trans('cruds.page.fields.published') }}
								</th>
								<td>
									{{ App\Models\Page::PUBLISHED_RADIO[$page->published] ?? '' }}
								</td>
							</tr>
							<tr>
								<th>
									{{ trans('cruds.page.fields.metatitle') }}
								</th>
								<td>
									{{ $page->metatitle }}
								</td>
							</tr>
							<tr>
								<th>
									{{ trans('cruds.page.fields.metadescription') }}
								</th>
								<td>
									{{ $page->metadescription }}
								</td>
							</tr>
							<tr>
								<th>
									{{ trans('cruds.page.fields.metakeywords') }}
								</th>
								<td>
									{{ $page->metakeywords }}
								</td>
							</tr>
						</tbody>
					</table>
					<div class="d-flex  justify-content-between">
						<a class="btn  btn-info" href="{{ route('admin.pages.edit', $page->id) }}">
							Edit Info
						</a>
						<a class="btn  btn-outline-primary" target="_blank" href="{{ route('page', ['slug' => $page->slug]) }}"">
						View Page
				</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection