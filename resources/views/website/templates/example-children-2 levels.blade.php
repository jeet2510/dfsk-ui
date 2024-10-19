@foreach($data->values as $value)
<div class="ltn__page-details-area ltn__blog-details-area mb-120 mt-120">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="">
					<div class="ltn__page-details-inner ltn__blog-details-inner">
						<h2 class="ltn__blog-title">{{ $value->title_1 }}</h2>
						<div class="p-text">
							{!! $value->text_1 !!}
						</div>
					</div>
					<div class="tabs-container">
						<div>
							@foreach($data->sectionSections as $childp)
							<div class="bg-danger" id="tab-item-{{ $loop->index }}">
								{{ $childp->title }}
								<div class="bg-success p-4">
									@include('/website/templates/'.$childp->template->filename,['data'=>$childp])
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="iseditable d-none">
		@include('/admin/fields/simple_text',['value'=>$value, 'fieldname'=> 'title_1','placeholder'=>'Title'])
		@include('/admin/fields/rich_text',['value'=>$value, 'fieldname'=> 'text_1','placeholder'=>'Text'])
	</div>
</div>
@endforeach