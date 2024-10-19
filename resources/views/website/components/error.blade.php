@extends('/layouts/default')
@push('styles')
@endpush
@section('page-content')
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-light mb-0" >
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="ltn__breadcrumb-inner">
					<h1 class="page-title text-center mt-4">An Error Occurred.</h1>
					<p class=" text-center mt-4">There was an error processing your request. <br>
						Please try again later or contact us.
						<br>	<br>
						<a class="btn theme-btn-2 btn-effect-1 text-uppercase" href="javascript:history.go(-1);void(0);">
							Back
						</a></p>
						
				<div class="alert alert-danger d-none">
					<b>Error:</b> {{ $error }}
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('scripts')
@endpush